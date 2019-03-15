<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Member;

class MemberController extends Controller
{
     //首页
     public function index(){
        $member=Member::all();
        return view('member')->with('member',$member);
    }
    //查
    public function view($id){
        //方法1
        $member=Member::find($id);
        return view('member')->with('member',$member);
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    
}
