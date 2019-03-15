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
        return view('index')->with('news',$news);
                            
    }
    //查
    public function view($id){
        //方法1
        $news=News::find($id);
        return view('view')->withNews(News::find($id));
        //->with('comment',$msg->comment()->get());
        //方法2
        // $msg=Msg::all();
        // return view('view')->withMsg(Msg::find($id))
        // ->with('comment',$msg->find($id)->comment()->get());
        
    }
    //增
    public function add(){
        $news=new News();
        $news->title=Request::input('title');
        $news->body=Request::input('body');
        $news->classification=Request::input('classification');
        $news->save();
        return redirect('/');
    }
    //删
    public function delete($id){
        News::destroy($id);
        return redirect('/');
    }
    //改
    public function edit($id){
        return view('edit')->withNews(News::find($id));
    }
    public function postEdit($id){
        $news=News::find($id);
        $news->title=Request::input('title');
        $news->body=Request::input('body');
        $news->classification=Request::input('classification');
        $news->save();
        return redirect('/');
    }
    
}
