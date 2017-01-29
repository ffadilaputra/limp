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
    return view('templates.admin.dashboard');
});

Route::get('/contact', 'ContactController@index');
Route::get('/about', 'ContactController@about');

Route::resource('category', 'CategoryController');
Route::get('category/del/{id}','CategoryController@destroy');

Route::resource('transac', 'TransactionController');
Route::get('transac/d/{id}','TransactionController@destroy');

Route::resource('notes', 'NotesController');