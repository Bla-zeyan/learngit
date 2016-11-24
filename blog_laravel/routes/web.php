<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//网站后台路由配置
Route::any('/admin/login',"Admin\UserController@login")->name('login');//加载登录页
Route::get('/admin/code',"Admin\UserController@code");//加载验证码
// Route::get('/admin/code/get',"Admin\UserController@getcode");//加载验证码


Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware' => 'admin'], function () {
  Route::get('/index',"IndexController@index")->name('index');
  Route::get('/user', 'UserController@outlogin')->name('user');
  Route::get('/article', 'ArticleController@login')->name('article');


});
// Route::get('/admin/login', 'Admin/IndexController@login');
//网站前台路由配置
// Route::resource('/index', 'IndexController');
// Route::resource('/create', 'IndexController');
// Route::resource('/index/{}', 'IndexController');
// Route::resource('/create/{}/edit', 'IndexController');
//
// Route::match(['get', 'post'], 'login', 'LoginController@login');
