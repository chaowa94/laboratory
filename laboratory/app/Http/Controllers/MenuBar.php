<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Menu;
class MenuBar extends Controller
{
    //导航菜单
    public function index(){
        $menu=Menu::all();
        return view('m')->with('menu',$menu);                 
    }
}
