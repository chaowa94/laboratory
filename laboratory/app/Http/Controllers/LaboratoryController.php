<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Laboratory;
class LaboratoryController extends Controller
{
     //首页
     public function index(){
        $laboratory=Laboratory::all();
        return view('laboratory')->with('laboratory',$laboratory);

    }
    //查
    public function view($id){
        //方法1
        $laboratory=Laboratory::find($id);
        return view('laboratory')->with('laboratory',$laboratory);
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    
}
