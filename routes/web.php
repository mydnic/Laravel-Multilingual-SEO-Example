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

Route::get('/', ['as' => 'home', 'uses' => 'PostController@index']);

Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'PostController@show']);

Route::get(trans('routes.about'), ['as' => 'about', 'uses' => 'PageController@getAboutPage']);

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Auth::routes();
