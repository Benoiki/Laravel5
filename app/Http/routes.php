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

/*Forms */
Route::controller('users', 'UserController');
//Route:get('users', 'UserController@getInfos');
//Route::post('users', 'UserController@postInfos');
Route::controller('contact', 'ContactController');