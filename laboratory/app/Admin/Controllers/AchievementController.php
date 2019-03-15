<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Achievement;

class AchievementController extends Controller
{
     //首页
     public function index(){
        $achievement=Achievement::all();
        return view('index')->with('achievement',$achievement);
    }
    //查
    public function view($id){
        //方法1
        $achievement=Achievement::find($id);
        return view('view')->withAchievement(Achievement::find($id));
        //->with('comment',$msg->comment()->get());
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    //增
    public function add(){
        $achievement=new Achievement();
        $achievement->name=Request::input('name');
        $achievement->people=Request::input('people');
        $achievement->classification=Request::input('classification');
        $achievement->introduce=Request::input('introduce');
        $achievement->introduce=Request::input('introduce');
        $achievement->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        Achievement::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withAchievement(Achievement::find($id));
    }
    public function postEdit($id){
        $achievement=Achievement::find($id);
        $achievement->name=Request::input('name');
        $achievement->people=Request::input('people');
        $achievement->classification=Request::input('classification');
        $achievement->introduce=Request::input('introduce');
        $achievement->introduce=Request::input('introduce');
        $achievement->save();
        return redirect('/');
    }
}
