<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('all.products');
Route::get('/products/create', 'ProductController@create')->name('create.product');
Route::post('/products/store', 'ProductController@store')->name('store.product');
Route::get('/products/{id}/delete', 'ProductController@destroy')->name('delete.product');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('edit.product');
Route::post('products/{product}/update', 'ProductController@update')->name('update.product');