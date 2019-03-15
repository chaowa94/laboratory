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

#--------------------------------首页面--------------------------
Route::get('index','HomeController@index');//首页
Route::get('menu','MenuController@index');//导航菜单

#--------------------------------实验室--------------------------
Route::get('laboratory','LaboratoryController@index');//实验室
//查
Route::get('/view/{id}','LaboratoryController@view');

#--------------------------------新闻中心--------------------------
Route::get('news','NewsController@index');//新闻中心
//查
Route::get('/view/{id}','NewsController@view');

#--------------------------------成员介绍--------------------------
Route::get('member','MemberController@index');//成员介绍
//查
Route::get('/view/{id}','MemberController@view');

#--------------------------------研究成果--------------------------
Route::get('achievement','AchievementController@index');//研究成果
//查
Route::get('/view/{id}','AchievementController@view');

#------------------------------引入后台路由--------------------------
include("admin.php");