<?php

use App\CategoryModel;

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

Route::get('/contact', 'ContactController@index');
Route::get('/about', 'ContactController@about');

Route::get('/category/add', 'CategoryController@create');
Route::post('/category/update', 'CategoryController@update');
Route::get('/category', 'CategoryController@read');
Route::get('/category/{id}','CategoryController@show');
Route::get('/category/delete/{id}','CategoryController@delete');
Route::get('/category/edit/{id}','CategoryController@edit');


