<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class AdminController extends Controller
{
    public $title = array('Dashboard');
   public function index(){
       $this->title[] = 'Admin Index'; $title = $this->title;
       return view('backend.dashboard.dashboard', compact(['title']));
   }

    public function signin(){
        $this->title[] = 'Sign In Page'; $title = $this->title;
        return view('backend.dashboard.login', compact(['title']));
    }

    public function signup(){
        $this->title[] = 'Sign Up Page'; $title = $this->title;
        return view('backend.dashboard.singup', compact(['title']));
    }

    public function lockscreen(){
        $this->title[] = 'Lock Screen Page'; $title = $this->title;
        return view('backend.dashboard.lock-screen', compact(['title']));
    }

    public function logout(){
        return redirect('/');
    }
}
