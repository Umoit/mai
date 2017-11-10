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

Route::get('admin/login','Admin\IndexController@getLogin');
Route::post('admin/login','Admin\IndexController@postLogin')->name('admin.login');

Route::group(['prefix' => 'admin',  'middleware' => 'admin'],function(){
	Route::get('logout','Admin\IndexController@logout');
	
	Route::get('test','Admin\IndexController@test')->name('admin.test');

	Route::get('dashboard','Admin\IndexController@dashboard')->name('admin.dashboard');
	
	//产品
	Route::resource('product','Admin\ProductController');
	
});



Route::resource('category','Admin\CategoryController');

Route::resource('brand','Admin\BrandController');

Route::resource('menu','Admin\MenuController');
