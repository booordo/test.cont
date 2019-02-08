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
Route::get('/about/history', 'PageController@about_history');
Route::get('/about/partners', 'PageController@about_partners');
Route::get('/about/developers', 'PageController@about_developers');