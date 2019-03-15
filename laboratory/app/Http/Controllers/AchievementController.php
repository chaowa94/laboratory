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
        return view('achievement')->with('achievement',$achievement);
    }
    //查
    public function view($id){
        //方法1
        $achievement=Achievement::find($id);
        return view('achievement')->with('achievement',$achievement);
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
}
