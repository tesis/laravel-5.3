<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ProductsController@index');
Route::get('/products', 'ProductsController@index');
Route::post('/products/', 'ProductsController@store');
Route::get('products/{product}', 'ProductsController@show');
Route::get('products/{product}/edit', 'ProductsController@edit');

