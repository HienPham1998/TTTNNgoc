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

Route::get('/admin', 'AdminController@index');
Route::get('/users/index', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/users/store', 'UserController@store');
Route::put('/users/edit/{id}', 'UserController@store');
Route::delete('/users/delete/{id}', 'UserController@destroy');

Route::get('/brands/index', 'BrandController@index');
Route::get('/brands/create', 'BrandController@create');
Route::post('/brands/store', 'BrandController@store');
Route::put('/brands/edit/{id}', 'BrandController@store');
Route::delete('/brands/delete/{id}', 'BrandController@destroy');

Route::get('/products/index', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/store', 'ProductController@store');
Route::put('/products/edit/{id}', 'ProductController@store');
Route::delete('/products/delete/{id}', 'ProductController@destroy');