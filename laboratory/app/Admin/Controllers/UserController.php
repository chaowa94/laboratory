<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\User;

class UserController extends Controller
{
     //首页
     public function index(){
        $user=User::all();
        return view('index')->with('user',$user);
                            
    }
    //查
    public function view($id){
        //方法1
        $user=User::find($id);
        return view('view')->withUser(User::find($id));
        //->with('comment',$msg->comment()->get());
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    //增
    public function add(){
        $user=new User();
        $user->name=Request::input('name');
        $user->password=Request::input('password');
        $user->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        User::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withUser(User::find($id));
    }
    public function postEdit($id){
        $user=User::find($id);
        $user->name=Request::input('name');
        $user->password=Request::input('password');
        $user->save();
        return redirect('/');
    }
    
}
