<?php

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

use \App\Article;

Route::get('/', function () {
	$data['causes'] = \App\Cause::all();
	// $data['articles'] = \App\Article::all()
	$data['articles'] = Article::orderBy('created_at','desc')->take(3)->get();
	$data['pictures'] = \App\Image::all();

	$data['properties'] = DB::table('application_properties')->first();
	$data['aboutus'] = DB::table('about_us')->first();
    return view('index')->with('data', $data);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/read','ReadArticleController@read');

Route::get('/gallery','galleryController@gallery');

Route::get('/articles','articlesController@articles');

Route::get('/about','AboutController@about');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
