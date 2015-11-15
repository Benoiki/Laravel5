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

Route::get('/', 'WelcomeController@index');
Route::get('{n}', function($n){
    return response('Welcome to page '.$n.' !', 200);
})->where('n', '[1-3]');
Route::get('article/{n}', 'ArticleController@showArticle')->where('n', '[0-9]+');
Route::get('facture/{n}', function($n){
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

/* Forms */
Route::controller('users', 'UsersController');
//Route:get('users', 'UserController@getInfos');
//Route::post('users', 'UserController@postInfos');
Route::controller('contact', 'ContactController');
Route::controller('photo', 'PhotoController');

/* Database */
Route::controller('email', 'EmailController');
Route::resource('user', 'UserController');

Route::get('home', '\Bestmomo\Scafold\Http\Controllers\HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::get('post/tag/{tag}', 'PostController@indexTag');