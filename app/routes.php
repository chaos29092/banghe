<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//page
Route::get('/', 'PageController@index');
Route::get('process', 'PageController@process');
Route::get('privacy', 'PageController@privacy');
Route::get('about_us', 'PageController@about_us');
Route::get('channel', 'PageController@channel');
Route::get('buy', 'PageController@buy');
Route::get('new_1', 'PageController@new_1');

//product
Route::get('test', 'ProductController@test');