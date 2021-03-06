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


Route::get('/carbon','PruebaextController@pruebacarbon');
Route::get('/excelp','PruebaextController@pruebaexcel');
Route::get('/pdfp','PruebaextController@pruebapdf');

Route::get('/image', 'PruebaextController@pruebaimage');
Route::post('uploadimage', 'PruebaextController@uploadimage');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




