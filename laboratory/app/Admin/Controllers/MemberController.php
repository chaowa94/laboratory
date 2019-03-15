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
        return view('index')->with('member',$member);
    }
    //查
    public function view($id){
        //方法1
        $member=Member::find($id);
        return view('view')->withMember(Member::find($id));
        //->with('comment',$msg->comment()->get());
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    //增
    public function add(){
        $member=new Member();
        $member->name=Request::input('name');
        $member->sex=Request::input('sex');
        $member->major=Request::input('major');
        $member->grade=Request::input('grade');
        $member->identity=Request::input('identity');
        $member->introduce=Request::input('introduce');
        $member->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        Member::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withMember(Member::find($id));
    }
    public function postEdit($id){
        $member=Member::find($id);
        $member->name=Request::input('name');
        $member->sex=Request::input('sex');
        $member->major=Request::input('major');
        $member->grade=Request::input('grade');
        $member->identity=Request::input('identity');
        $member->introduce=Request::input('introduce');
        $member->save();
        return redirect('/');
    }
    
}
