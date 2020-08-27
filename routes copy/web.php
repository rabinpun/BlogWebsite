<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'pagescontroller@index')->middleware('auth');
Route::get('/services', 'pagescontroller@services');
Route::get('/about', 'pagescontroller@about');
Route::resource('posts','postcontroller');
Auth::routes();

Route::get('/home', 'HomeController@index');

