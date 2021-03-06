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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//static pages
Route::get('/About', 'HomeController@showAbout');
Route::get('/category/{id}', 'HomeController@searchWithCategory');
Route::get('/{url}', 'HomeController@show');
