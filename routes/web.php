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


// 后台
Route::group([],function(){

	//后台首页
	Route::any('/admin',function(){
		return view('admin.index',['title'=>'后台首页管理']);
	});
	//后台用户管理
	ROute::resource('/admin/user','Admin\UserController');
});
