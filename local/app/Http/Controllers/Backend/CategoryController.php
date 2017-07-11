<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Request;

class CategoryController extends Controller
{
    public $title = array('Dashboard');
    public function add(){
        $this->title[] = 'Add Category'; $title = $this->title;
        return view('backend.category.add', compact(['title']));
    }
}
