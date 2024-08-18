<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function Role(){
        if(auth()->user()->Role=='user'){
            return view('User.dashboard');
        }
        else if(auth()->user()->Role=='Admin'){
            return view('Admin.dashboard');
        }
        else if(auth()->user()->Role=='SuperAdmin'){
            return view('SuperAdmin.dashboard');
        }
        else{
            return observe(401);
        }
    }
}
