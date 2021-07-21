<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('comics', 'ComicController');

Route::get('/', 'ComicController@index');
Route::get('comics.show', 'ComicController@show');
Route::get('comics.edit', 'ComicController@edit');
Route::get('comics.create', 'ComicController@create');
Route::post('comics.store', 'ComicController@store');
Route::put('comics.update', 'ComicController@update');
Route::delete('comics.destroy', 'ComicController@destroy');