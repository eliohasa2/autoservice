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
;

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('authenticated');
Route::group(['middleware'=>['web']],function(){

Route::resource('cars','CarsController');
Route::resource('tires','TiresController');


});
Route::get('pages/cars',['uses'=>'CarsController@cars']);
Route::get('pages/tires',['uses'=>'TiresController@tires']);


Route::group(['middleware'=>['web']],function(){

Route::resource('home','CarsController');
Route::get('home/cars/{id}', 'CarsController@edit')->name('home.cars.edit');
Route::post('home/cars/{id}', 'CarsController@update')->name('home.cars.update');
Route::get('home/tires/{id}', 'CarsController@tiresEdit')->name('home.tires.edit');
Route::post('home/tires/{id}', 'CarsController@tiresUpdate')->name('home.tires.update');
// Route::resource('home','TiresController');

});
// Route::get('/home',['uses'=>'CarsController@home'])->middleware('authenticated');
//requests function name

Route::get('pages/details/{id}', 'CarsController@details');

Route::get('/home',['uses'=>'CarsController@home'])->middleware('authenticated');


// Route::get('pages/details',['uses'=>'CarsController@details']);


Route::get('pages/sendMail',['uses'=>'AutoController@sendMail']);
Route::post('pages/sendMail',['uses'=>'AutoController@postMail']);

