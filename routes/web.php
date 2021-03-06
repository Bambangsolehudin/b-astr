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

Route::get('/', 'HomeController@index');

Route::resource('category', 'CategoryController');
Route::resource('gallery', 'GalleryController');
Route::resource('rumah', 'RumahController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
