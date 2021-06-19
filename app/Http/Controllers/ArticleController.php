<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'قائمة المقالات';
        $articles = Article::all();

        return view('dashboard.articles.index', compact('title', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'اضافة مقال';
        return view('dashboard.articles.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'title' => 'required|string|min:5|max:150|unique:articles,title',
            'summary' => 'required|string|min:10|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,gif,jpeg',
            "published" => 'nullable|numeric',
        ];

        $niceNames = [
            'title' => 'العنوان',
            'summary' => 'الملخص',
            'content' => 'الوصف',
            'image' => 'صورة المقال',
            'published' => 'الحالة',
        ];

        $data = $this->validate($request, $rules, [], $niceNames);

        $new = new Article();
        $new->fill(Arr::except($data, ["ckeditor"]))->save();

        if ($request->hasFile('image')) {

            // get the extension of image
            $ext = $request->File('image')->getClientOriginalExtension();

            $image = 'storage/images/articles/' . $new->id . '/' . time() . '.' . $ext;

            // create new folder with the name of video id
            mkdir(public_path('storage/images/articles/' . $new->id));

            Image::make($request->image)->resize(380, 337)->save(public_path($image));

            $new->fill(['image' => $image])->save();
        }

        $request->session()->flash('msgSuccess', 'تم اضافة المقال بنجاح');
        return redirect(adminUrl('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $title = 'تعديل مقال';

        return view('dashboard.articles.edit', compact('title', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            'title' => 'required|string|min:5|max:150|unique:articles,title,' . $article->id,
            'summary' => 'required|string|min:10|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,gif,jpeg',
            "published" => 'required',
        ];

        $niceNames = [
            'title' => 'العنوان',
            'summary' => 'الملخص',
            'content' => 'المقال',
            'image' => 'صورة المقال',
            'published' => 'الحالة',
        ];

        $data = $this->validate($request, $rules, [], $niceNames);

        if ($request->hasFile('image')) {

            $oldImage = public_path($article->image);

            if (file_exists($oldImage) and $article->image != 'storage/images/articles/default.png') { // remove old image
                @unlink($oldImage);
            }

            // get the extension of image
            $ext = $request->File('image')->getClientOriginalExtension();

            $data['image'] = 'storage/images/articles/' . $article->id . '/' . time() . '.' . $ext;

            if (!is_dir(public_path('storage/images/articles/' . $article->id))) {
                // create new folder with the name of video id
                mkdir(public_path('storage/images/articles/' . $article->id));
            }

            \Image::make($request->image)->resize(380, 337)->save(public_path($data['image']));

        }

        $article->fill(Arr::except($data, ["ckeditor"]))->save();

        $request->session()->flash('msgSuccess', 'تم تعديل المقال بنجاح');
        return redirect(adminUrl('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $image_path = public_path($article->image);

        if (file_exists($image_path) && $article->image != "storage/images/articles/default.png") {
            unlink($image_path);
        }

        $imgDir = public_path("storage/images/articles/" . $article->id);

        if (is_dir($imgDir)) {
            rmdir($imgDir);
        }

        $article->delete();

        request()->session()->flash('msgSuccess', 'تم حذف المقال بنجاح');
        return redirect(adminUrl('articles'));
    }
}
