<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Menu;
use App\Models\Team;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function index(){

        $teams=Team::all();
        $menus=Menu::all();
        $account=Account::FindOrFail(1);
        return view('WebSite.index',compact('teams','menus','account'));

    }

    public function about(){
        
        return view('WebSite.about');

    }

    public function booking(){
        
        return view('WebSite.booking');

    }

    public function contact(){

        return view('WebSite.contact');
        
    }

    public function menu(){

        $menus=Menu::all();
        return view('WebSite.menu',compact('menus'));
        
    }

    public function service(){

        return view('WebSite.service');
        
    }

    public function testimonial(){

        return view('WebSite.testimonial');
        
    }

    public function team(){

        $teams=Team::all();
        return view('WebSite.team',compact('teams'));
        
    }
}
