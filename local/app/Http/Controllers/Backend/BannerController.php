<?php

namespace App\Http\Controllers\Backend;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.banner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Banner();
        $this->validate($request, [
            'name' => 'required|max:255',
            'is_active' => 'required',
            'filename' => 'required|image|mimes:jpeg,bmp,png'
        ]);
        if($request->hasFile('filename')) {
            $image = $request->file('filename');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('../../uploads/banner/' . $filename));
        }

        $model->name = $request->name;
        $model->position = 1;
        $model->is_active = $request->is_active;
        $model->filename = $filename;
        if ($model->save()) {
            return redirect("/dashboard/banner")->withSuccess('The category has been saved');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
