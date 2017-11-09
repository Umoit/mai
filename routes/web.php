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


Route::group(['prefix'=>'admin'],function(){
	Route::get('/','Admin\IndexController@index');
	Route::get('login','Admin\IndexController@getLogin');
	Route::post('login','Admin\IndexController@postLogin');
});


Route::resource('product','Admin\ProductController');

Route::resource('category','Admin\CategoryController');

Route::resource('brand','Admin\BrandController');

Route::resource('menu','Admin\MenuController');
