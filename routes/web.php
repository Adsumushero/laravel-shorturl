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

Route::get('/', 'indexController@index')->name('shortener.index');
Route::get('/dashboard', 'indexController@dashBoard')->name('shortener.dashboard');
Route::get('{sShortUrl}', 'indexController@redirect')->name('shortener.redirect');
Route::post('/', 'indexController@store')->name('shortener.post');


