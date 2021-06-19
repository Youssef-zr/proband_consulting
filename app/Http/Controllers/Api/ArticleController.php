<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function get_articles()
    {
        $articles = Article::orderBy("id","desc")->paginate(4);
        return response()->json(['articles' => $articles, 'statusCode' => 200]);
    }

    public function get_article($article)
    {
        $article = Article::find($article);

        if (empty($article)) {
            return response()->json(['statusCode' => "422"]);
        }
        return response()->json(['article' => $article, 'statusCode' => 200]);
    }
}
