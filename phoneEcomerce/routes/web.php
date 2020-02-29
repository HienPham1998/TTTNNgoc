<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"ClientController@index");
Route::get('/cart','ClientController@getCart');
Route::get('/add-to-cart/{id}','ClientController@addToCart');
Route::get('/remove/{id}','ClientController@removeCart');

Route::get('/product-detail/{id}','ClientController@getProductDetail');