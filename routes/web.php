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
Route::group(['prefix' => 'products'],function(){
    route::get('/','ProductController@index')->name('products.index');
    route::get('/create','ProductController@create')->name('products.create');
    route::post('/create','ProductController@store')->name('products.store');
    route::get('/show/{id}','ProductController@show')->name('products.show');
    route::get('/edit/{id}','ProductController@edit')->name('products.edit');
    route::post('/update/{id}','ProductController@update')->name('products.update');
    route::get('/delete/{id}','ProductController@delete')->name('products.delete');
    route::get('/destroy/{id}','ProductController@destroy')->name('products.destroy');
});
