<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog.index');
    }

    public function detail(){
        return view('frontend.blog.detail');
    }
}