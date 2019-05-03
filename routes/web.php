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
Route::get('/form', 'BukuController@input');
Route::post('/store','BukuController@store');
Route::get('/view', 'BukuController@view');
Route::get('/destroy/{id}', 'BukuController@destroy');
Route::get('/edit/{id}', 'BukuController@edit');
Route::post('/update/{id}', 'BukuController@update');