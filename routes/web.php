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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('/create', 'BlogController@create')->name('blog.create');
    Route::post('/create', 'BlogController@add')->name('blog.add');
    Route::get('/{id}/edit', 'BlogController@edit')->name('blog.edit');
    Route::post('/{id}/edit', 'BlogController@update')->name('blog.update');
    Route::get('/{id}/show', 'BlogController@show')->name('blog.show');
    Route::get('/{id}/delete', 'BlogController@delete')->name('blog.delete');
});
