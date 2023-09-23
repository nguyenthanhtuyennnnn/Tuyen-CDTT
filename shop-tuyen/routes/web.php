<?php
use Illuminate\Support\Facades\Route;
//frontend**********
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');



//backend***********
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
