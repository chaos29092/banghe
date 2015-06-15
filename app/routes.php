<?php

//page
Route::get('/', 'PageController@index');
Route::get('process', 'PageController@process');
Route::get('privacy', 'PageController@privacy');
Route::get('about_us', 'PageController@about_us');
Route::get('channel', 'PageController@channel');
Route::get('buy', 'PageController@buy');

//news
Route::get('news', 'PageController@news');
Route::get('new_1', 'PageController@new_1');
Route::get('new_2', 'PageController@new_2');
Route::get('new_3', 'PageController@new_3');
Route::get('new_4', 'PageController@new_4');
Route::get('new_5', 'PageController@new_5');
Route::get('new_6', 'PageController@new_6');
Route::get('new_7', 'PageController@new_7');
Route::get('new_8', 'PageController@new_8');
Route::get('new_9', 'PageController@new_9');
Route::get('new_10', 'PageController@new_10');

//dna
Route::get('dna', 'PageController@dna');
Route::get('dna/dna_1', 'PageController@dna_1');
Route::get('dna/dna_2', 'PageController@dna_2');
Route::get('dna/dna_3', 'PageController@dna_3');

//product
Route::get('products', 'ProductController@products');
Route::get('products/changjian', 'ProductController@changjian');
Route::get('products/women', 'ProductController@women');
Route::get('products/men', 'ProductController@men');
Route::get('products/xinnao', 'ProductController@xinnao');
Route::get('products/yigan', 'ProductController@yigan');
Route::get('products/quanpu', 'ProductController@quanpu');
Route::get('products/tianfu', 'ProductController@tianfu');