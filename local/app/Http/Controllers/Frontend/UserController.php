<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class UserController extends Controller
{
    public $title = array('Multi Shop');
    public function wishlist(){
        $this->title[] = 'Wishlist Page'; $title = $this->title;
        return view('frontend.user.wishlist', compact(['title']));
    }

    public function dashboard(){
        $this->title[] = 'Dashboard Page'; $title = $this->title;
        return view('frontend.user.dashboard', compact(['title']));
    }

    public function shopping_cart(){
        $this->title[] = 'Shopping Cart Page'; $title = $this->title;
        return view('frontend.user.shopping_cart', compact(['title']));
    }
}
