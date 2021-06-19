<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["middleware" => "api", 'namespace' => "Api"], function () {
    Route::post('sendEmail', "EmailController@sendEmail");
    // all articles
    Route::get('getArticles', "ArticleController@get_articles");
    // one articles
    Route::get('getArticle/{id}', "ArticleController@get_article");

});
