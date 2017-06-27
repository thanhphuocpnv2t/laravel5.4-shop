<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index.index');
    }

    public function login(){
        return view('frontend.index.login');
    }

    public function contactus(){
        return view('frontend.index.signin');
    }

    public function sitemap(){
        return view('frontend.index.sitemap');
    }

    public function contact_us(){
        return view('frontend.index.contact_us');
    }

    public function about_us(){
        return view('frontend.index.about_us');
    }

    public function delivery(){
        return view('frontend.index.delivery');
    }
}
