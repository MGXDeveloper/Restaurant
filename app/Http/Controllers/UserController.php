<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Menu(){

        $menus=Menu::all();
        return view('User.menu',compact('menus'));
    }
}
