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
Route::get('/reviews', 'PageController@reviews');
Route::get('/contacts', 'PageController@contacts');
Route::get('/price-list', 'PageController@priceList');
Route::get('/solutions/contabilizare-4-0/erp-system', 'Solutions\Contabilizare40\PageController@erpSystem');
Route::get('/solutions/contabilizare-4-0/agricultural-management', 'Solutions\Contabilizare40\PageController@agriculturalManagement');
Route::get('/solutions/contabilizare-4-0/construction-management', 'Solutions\Contabilizare40\PageController@constructionManagement');
Route::get('/solutions/contabilizare-5-0/description', 'Solutions\Contabilizare50\PageController@description');
Route::get('/solutions/contabilizare-5-0/developers', 'Solutions\Contabilizare50\PageController@developers');
Route::get('/solutions/contabilizare-5-0/download', 'Solutions\Contabilizare50\PageController@download');
Route::get('/solutions/contabilizare-5-0/install', 'Solutions\Contabilizare50\PageController@install');
Route::get('/solutions/contabilizare-5-0/partners', 'Solutions\Contabilizare50\PageController@partners');