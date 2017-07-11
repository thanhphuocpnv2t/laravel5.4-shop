<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.product.index');
    }

    public function add(){
        return view('backend.product.add');
    }

    public function view($id){
        return view('backend.product.view');
    }

}
