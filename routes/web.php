<?php
Route::get('/', function () {
    return view('items/index');
});
Auth::routes();
Route::get('/home', 'itemsController@index');
Route::get('/','itemsController@index');
Route::get('items','itemsController@index');
//Route::get('items','sizeController@index');
Route::get('items/create','itemsController@create');
Route::post('items','itemsController@store');
Route::resource('items', 'itemsController');
