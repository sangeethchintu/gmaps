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

Route::get('/', function () {
    return view('front');
});



Route::get('/maps', function () {
    return view('maps');
});

Route::get('/autocomplete', function () {
    return view('autocomplete');
});
Route::get('/autocompletesimple', function () {
    return view('autocompletesimple');
});

Route::get('/searchGirls', 'SearchGirlController@index');