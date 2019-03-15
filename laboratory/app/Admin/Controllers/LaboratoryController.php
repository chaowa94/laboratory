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
        return view('index')->with('laboratory',$laboratory);

    }
    //查
    public function view($id){
        //方法1
        $laboratory=Laboratory::find($id);
        return view('view')->with('laboratory',$laboratory);
        //->with('comment',$msg->comment()->get());
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    //增
    public function add(){
        $laboratory=new Laboratory();
        $laboratory->name=Request::input('name');
        $laboratory->introduce=Request::input('introduce');
        $laboratory->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        Laboratory::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withLaboratory(Laboratory::find($id));
    }
    public function postEdit($id){
        $laboratory=Laboratory::find($id);
        $laboratory->name=Request::input('name');
        $laboratory->introduce=Request::input('introduce');
        $laboratory->save();
        return redirect('/');
    }
    
}
