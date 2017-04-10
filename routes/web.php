<?php
Route::get('/', function () {
    return view('items/index');
});
//Auth::routes
Route::post('items/AddToCart','itemsController@AddToCart');

Route::get('/home', 'itemsController@index');
Route::get('/','itemsController@index');
Route::get('items','itemsController@index');
//Route::get('items','sizeController@index');
Route::get('items/create','itemsController@create');
Route::post('items','itemsController@store');
Route::resource('items', 'itemsController');
Auth::routes();
Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');

//Route::get('/home', 'HomeController@index');
