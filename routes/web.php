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
    return view('welcome');
});

Route::get('/create', 'BukuController@create');

Route::post('/input', 'BukuController@store');

Route::get('/view', 'BukuController@view');

Route::get('/destroy', 'BukuController@destroy');

Route::get('/edit', 'BukuController@edit');

Route::post('/update/{id}', 'FormController@update');