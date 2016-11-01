<?php

/*
|| to using a Closure or controller method. Build something great!
|
*/
// --------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | This file is where you may define all of the routes that are handled
// | by your application. Just tell Laravel the URIs it should respond

Route::get('/', 'AutoController@index');


Route::get('pages/modal',['uses'=>'AutoController@modal']);
Route::get('pages/carwash',['uses'=>'AutoController@carwash']);
Route::get('pages/tires',['uses'=>'AutoController@tires']);
Route::get('pages/services',['uses'=>'AutoController@services']);
Route::get('pages/cars',['uses'=>'AutoController@cars']);

Auth::routes();

Route::get('/home', 'HomeController@index');
