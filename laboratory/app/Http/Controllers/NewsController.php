<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\News;

class NewsController extends Controller
{
     //首页
     public function index(){
        $news=News::all();
        return view('news')->with('news',$news);
                            
    }
    //查
    public function view($id){
        //方法1
        $news=News::find($id);
        return view('news')->with('news',$news);
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    
}
