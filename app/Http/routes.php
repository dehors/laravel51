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

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('user', 'UserController');
Route::resource('pelicula','MovieController');
Route::resource('log', 'LogController');
Route::resource('logout', 'LogController@logout');
Route::resource('mail','MailController');
Route::resource('genders', 'GenreController', ['only' => ['index','create']]);

Route::group(['prefix' => 'api'], function()
{
    Route::resource('genders', 'GenreController', ['only' => ['store']]);
    Route::get('genders', 'MovieController@gender');    
});