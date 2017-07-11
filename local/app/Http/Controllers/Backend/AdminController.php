<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class AdminController extends Controller
{
   public function index(){
       return view('backend.dashboard.dashboard');
   }

    public function signin(){
        return view('backend.dashboard.login');
    }

    public function signup(){
        return view('backend.dashboard.singup');
    }

    public function lockscreen(){
        return view('backend.dashboard.lock-screen');
    }

    public function logout(){
        return redirect('/');
    }
}
