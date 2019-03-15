<?php
namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\User;

class AdminController extends Controller
{
     //登录页面
     public function index(){
         return view("login");
     }
     //登录
     public function login(){
         $this->validate(request(),[
             'name'=>'required|unique',
             'password'=>'required|min:5',
         ]);
         $user=request(['name','password']);
         if(\Auth::attempt($user)){
             return redirect('index');
         }
        return \Redirect::back()->withErrors("用户名或密码错误");
    }
    //登出
    public function logout(){
        \Auth::logout();
       return redirect('admin');
   }
}