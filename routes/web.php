<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'pagescontroller@index');
Route::get('/welcome', 'pagescontroller@welcome');
Route::get('/services', 'pagescontroller@services');
Route::get('/about', 'pagescontroller@about');
Route::resource('posts','postcontroller');