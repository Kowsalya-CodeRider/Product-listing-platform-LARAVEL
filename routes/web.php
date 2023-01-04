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

Route::get('/','AdminController@user');

Route::get('admin','AdminController@index');

Route::post('products','AdminController@insertProduct');

Route::post('login','AdminController@logincheck');

Route::get('getProducts','AdminController@getProducts');

Route::get('logout','AdminController@logout');