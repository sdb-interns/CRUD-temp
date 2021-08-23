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

Route::get('/', function () {
    return view('welcome');
});
//todo:名前付きルート
Route::get('user/index','UserController@index')->name('user.index');
Route::get('user/create','UserController@create')->name('user.create');
Route::post('user/store','UserController@store')->name('user.store');
Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
Route::post('user/update/{id}','UserController@update')->name('user.update');
Route::delete('user/delete/{id}','UserController@delete')->name('user.delete');

Route::get('post/index','PostController@index')->name('post.index');
Route::get('post/create','PostController@create')->name('post.create');
Route::post('post/store','PostController@store')->name('post.store');
Route::get('post/edit/{id}','PostController@edit')->name('post.edit');
Route::post('post/update/{id}','PostController@update')->name('post.update');
Route::delete('post/delete/{id}','PostController@delete')->name('post.delete');
