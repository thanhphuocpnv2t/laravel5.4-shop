<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class AdminController extends Controller
{
   public function index(){
       return view('backend.layouts.main');
   }
}
