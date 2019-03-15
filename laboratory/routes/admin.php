<?php
/**
 * 后台路由
 */

//登录页面
Route::get('login','LoginController@index');
//登录行为
Route::post('login','LoginController@login');
//登出
Route::get('login','LoginController@logout');


//后台页面
Route::get('index','AdminController@index');
#--------------------------------实验室--------------------------
Route::get('laboratory','LaboratoryController@index');
//查
Route::get('/view/{id}','LaboratoryController@view');
//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','LaboratoryController@add');
//删
Route::get('/delete/{id}','LaboratoryController@delete');
//改
Route::get('/edit/{id}','LaboratoryController@edit');
Route::post('/edit/{id}','LaboratoryController@postEdit');

#--------------------------------新闻中心--------------------------
Route::get('news','NewsController@index');
//查
Route::get('/view/{id}','NewsController@view');
//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','NewsController@add');
//删
Route::get('/delete/{id}','NewsController@delete');
//改
Route::get('/edit/{id}','NewsController@edit');
Route::post('/edit/{id}','NewsController@postEdit');

#--------------------------------成员介绍--------------------------
Route::get('member','MemberController@index');
//查
Route::get('/view/{id}','MemberController@view');
//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','MemberController@add');
//删
Route::get('/delete/{id}','MemberController@delete');
//改
Route::get('/edit/{id}','MemberController@edit');
Route::post('/edit/{id}','MemberController@postEdit');

#--------------------------------研究成果--------------------------
Route::get('achievement','AchievementController@index');
//查
Route::get('/view/{id}','AchievementController@view');
//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','AchievementController@add');
//删
Route::get('/delete/{id}','AchievementController@delete');
//改
Route::get('/edit/{id}','AchievementController@edit');
Route::post('/edit/{id}','AchievementController@postEdit');
