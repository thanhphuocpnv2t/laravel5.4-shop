<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class ProductController extends Controller
{
    public $title = array('Dashboard');
    public function index(){
        $this->title[] = 'List Product'; $title = $this->title;
        return view('backend.product.index', compact(['title']));
    }

    public function add(){
        $this->title[] = 'Add Product'; $title = $this->title;
        return view('backend.product.add', compact(['title']));
    }

    public function view($id){
        $this->title[] = 'View Product'; $title = $this->title;
        return view('backend.product.view', compact(['title']));
    }

}
