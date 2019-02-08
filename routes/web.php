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

Route::get('/', 'ProductController@index');
Route::get('/new', 'ProductController@create');
Route::post('/new', 'ProductController@store');
Route::get('/edit/{id}', 'ProductController@edit');
Route::post('/edit/{id}', 'ProductController@update');
Route::post('/delete/{id}', 'ProductController@destroy');
