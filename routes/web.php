<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' =>'admin', 'middleware' => 'isAdmin'], function () {
	Route::get('/', function () {
		return view('welcome');
	});
	Route::resource('pages', 'PagesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/page/{slug}', 'PagesController@show');
