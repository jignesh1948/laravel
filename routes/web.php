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

 

Route::get('books','BookController@index');

// Route::get('/', "ProfileController@index");
Route::get('/profile/{id?}',"ProfileController@singleProfile");
Route::get('/matches',"ProfileController@index");

Route::get('/mongo',"ProfileController@mongotest");
  
