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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/news', 'PageController@news');
Route::get('/reviews', 'PageController@reviews');
Route::get('/contacts', 'PageController@contacts');
Route::get('/price-list', 'PageController@priceList');