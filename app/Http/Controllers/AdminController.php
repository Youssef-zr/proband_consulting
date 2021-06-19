<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    public function index()
    {
        $title='اخر الاحصائيات';
        $count_articles = count(Article::all());
 
        return view('dashboard/index',compact('title','count_articles'));
    }
}
