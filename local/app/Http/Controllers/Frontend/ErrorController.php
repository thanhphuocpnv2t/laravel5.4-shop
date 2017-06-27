<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class ErrorController extends Controller
{
    public function index(){
        return view('frontend.error.error');
    }
}