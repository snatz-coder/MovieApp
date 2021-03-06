<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\FavouritesController;

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

Route::get('/', 'App\Http\Controllers\MoviesController@index');
Route::post('movie', 'App\Http\Controllers\MoviesController@store');
Route::post('favourites.store/{id}', 'App\Http\Controllers\FavouritesController@store');
Route::get('favourites', 'App\Http\Controllers\FavouritesController@index');
Route::get('delete/{id}', 'App\Http\Controllers\FavouritesController@destroy');
Route::resource('favourites', 'App\Http\Controllers\FavouritesController');




