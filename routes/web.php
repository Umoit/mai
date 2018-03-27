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
//前台
Route::get('/', 'Home\IndexController@index')->name('home');
Route::get('product/{id}','Home\IndexController@product')->name('product.front');

//购物车
	Route::get('cart',  'Home\CartController@index');
	Route::post('cart/add',  'Home\CartController@add')->name('cart.add');

	Route::get('cart/add','Home\CartController@add');
	Route::get('cart/show','Home\CartController@show');
	Route::get('cart/clean','Home\CartController@clean');
	Route::get('cart/remove','Home\CartController@remove');
	Route::get('cart/update','Home\CartController@update');


Route::group(['middleware' => 'check.user'], function() {
	//支付订单
	Route::get('checkout','Home\OrderController@confirm');
	Route::post('pay','Home\OrderController@pay')->name('pay');

});


//用户
Route::group(['prefix' => 'user'],function(){
	//登录
	Route::get('login', 'Home\UserController@getLogin');
	Route::get('register', 'Home\UserController@getRegister')->name('register');
	Route::post('login','Home\UserController@postLogin')->name('login');
	Route::post('register','Home\UserController@postRegister');
	Route::get('logout','Home\UserController@logout')->name('logout');


});

//后台
Route::get('admin/login','Admin\IndexController@getLogin');
Route::post('admin/login','Admin\IndexController@postLogin')->name('admin.login');

Route::group(['prefix' => 'admin',  'middleware' => 'check.admin'],function(){
	Route::get('logout','Admin\IndexController@logout');
	
	Route::get('test','Admin\IndexController@test')->name('admin.test');

	Route::get('dashboard','Admin\IndexController@dashboard')->name('admin.dashboard');
	
	//产品
	Route::get('product/{id}/delete', 'Admin\ProductController@delete')->name('product.delete');
	Route::resource('product','Admin\ProductController');


	//上传
	Route::post('image/upload','Admin\FileController@imageUpload')->name('image.upload');

	//分类
	Route::resource('category','Admin\CategoryController');

	//品牌
	Route::resource('brand','Admin\BrandController');

	//菜单
	Route::resource('menu','Admin\MenuController');

	//订单

	Route::resource('order','Admin\OrderController');


});





