<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PostController@index']);

Route::get('post/{slug}', ['as' => 'post.show', 'uses' => 'PostController@show']);

Route::get(trans('routes.about'), ['as' => 'about', 'uses' => 'PageController@getAboutPage']);

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::auth();
