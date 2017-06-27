<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class UserController extends Controller
{
    public function wishlist(){
        return view('frontend.user.wishlist');
    }

    public function dashboard(){
        return view('frontend.user.dashboard');
    }
}
