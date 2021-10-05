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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');
Route::get('/about','PagesController@about');

Route::get('/home','PagesController@home');
Route::get('/books','PagesController@books');
Route::get('/contact','PagesController@contact');
Route::get('/author', 'PagesController@author');

Route::get('/Categories/Create', 'CategoriesController@Create');
Route::post('/Categories/store', 'CategoriesController@store');
Route::get('/Categories', 'CategoriesController@index');