<?php

namespace App\Http\Controllers\Backend;

use App\Banners;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public $title = array('Dashboard');
    public function add(){
        $this->title[] = 'Add Banner'; $title = $this->title;
        return view('backend.banner.add', compact(['title']));
    }

    public function store(BannerRequest $request)
    {
        $banner = Banners::created(
            request(['name', 'position', 'type', 'is_active', 'filename', 'content', 'link'])
        );

        return redirect()->home();
    }
}
