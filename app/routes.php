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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('process', function()
{
   return View::make('process');
});

Route::get('privacy', function()
{
    return View::make('privacy');
});

Route::get('about_us', function()
{
    return View::make('about_us');
});

Route::get('channel', function()
{
    return View::make('channel');
});

Route::get('buy', function()
{
    return View::make('buy');
});

Route::get('new_1', function()
{
    return View::make('new_1');
});