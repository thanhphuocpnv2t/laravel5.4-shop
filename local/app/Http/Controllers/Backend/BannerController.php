<?php

namespace App\Http\Controllers\Backend;

use App\Banners;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public $title = array('Dashboard');

    public function index(){
        return view('backend.banner.index');
    }

    public function add(){
        return view('backend.banner.add');
    }

    public function store(BannerRequest $request)
    {
        $banner = Banners::created(
            request(['name', 'position', 'type', 'is_active', 'filename', 'content', 'link'])
        );

        return redirect()->home();
    }
}
