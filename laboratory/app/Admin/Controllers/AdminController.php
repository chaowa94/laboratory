<?php
namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Achievement;
use App\Models\Laboratory;
use App\Models\News;
use App\Models\Member;
use App\Models\Menu;

class AdminController extends Controller
{
     //首页展示
     public function index(){
        $achievement=Achievement::all();
        $laboratory=Laboratory::all();
        $news=News::all();
        $member=Member::all();
        $menu=Menu::all();
        return view('index')->with('achievement',$achievement)
                            ->with('laboratory',$laboratory)
                            ->with('news',$news)
                            ->with('member',$member)
                            ->with('menu',$menu);
    }
}
