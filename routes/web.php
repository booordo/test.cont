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
Route::prefix('/solutions/contabilizare-4-0')->group(function () {
    Route::get('erp-system', 'SolutionController@cont4ErpSystem');
    Route::get('agricultural-management', 'SolutionController@cont4AgriculturalManagement');
    Route::get('construction-management', 'SolutionController@cont4ConstructionManagement');
});
Route::prefix('/solutions/contabilizare-5-0')->group(function () {
    Route::get('description', 'SolutionController@cont5Description');
    Route::get('developers', 'SolutionController@cont5Developers');
    Route::get('download', 'SolutionController@cont5Download');
    Route::get('install', 'SolutionController@cont5Install');
    Route::get('partners', 'SolutionController@cont5Partners');
});