<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class IndexController extends Controller
{

    public $title = array('Multi Shop');
    public function index(){
        $this->title[] = 'Home Page'; $title = $this->title;
        return view('frontend.index.index', compact(['title']));
    }

    public function login(){
        $this->title[] = 'Login Page'; $title = $this->title;
        return view('frontend.index.login', compact(['title']));
    }

    public function sitemap(){
        $this->title[] = 'Sitemap Page'; $title = $this->title;
        return view('frontend.index.sitemap', compact(['title']));
    }

    public function contact_us(){
        $this->title[] = 'Contact us Page'; $title = $this->title;
        return view('frontend.index.contact_us', compact(['title']));
    }

    public function about_us(){
        $this->title[] = 'About us Page'; $title = $this->title;
        return view('frontend.index.about_us', compact(['title']));
    }

    public function delivery(){
        $this->title[] = 'Delivery Page'; $title = $this->title;
        return view('frontend.index.delivery', compact(['title']));
    }
}
