<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class IndexController extends Controller
{
    public function lostpassword(){
        return view('backend.index.lost-password');
    }
}
