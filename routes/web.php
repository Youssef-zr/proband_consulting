<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//  dashboard routes
Auth::routes(['register'=>false]);

Route::group(['prefix'=>"admin",'middleware'=>'auth'],function(){
    Route::get('/logout', function () {
        Auth::logout();
        return redirect(url('/'));
    });
    Route::get('/','AdminController@index');
    Route::resource('articles', "ArticleController");
});

// see to laravel we well use vueJs route to catch the error 404 when refresh page
Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
Auth::routes();

