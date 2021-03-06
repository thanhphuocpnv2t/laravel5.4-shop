<?php

namespace App\Http\Controllers\Backend;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = DB::table('banners')->paginate(10);
        return view('backend.banner.index', ['banners' => $banners]);
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
            'filename' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($request->hasFile('filename')) {
            $image = $request->file('filename');
            $filename = rand(1000, 999999) .'_'. time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('../../uploads/offer-banner/' . $filename));
        }

        $model->name = $request->name;
        $model->position = DB::table('banners')->max('position') + 1;
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
    public function show($id)
    {
        $model = Banner::find($id);
        return view('backend.banner.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Banner::find($id);
        return view('backend.banner.edit', ['model' =>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Banner::find($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'is_active' => 'required',
        ]);

        if($request->hasFile('filename')) {
            $image = $request->file('filename');
            $filename = rand(1000, 999999) .'_'. time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('../../uploads/offer-banner/' . $filename));
        }else{
            $filename = $model->filename;
        }

        $model->name = $request->name;
        $model->position = DB::table('banners')->max('position') + 1;
        $model->is_active = $request->is_active;
        $model->filename = $filename;
        if ($model->update()) {
            return redirect("/dashboard/banner");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Banner::find($id)->delete();
    }
}
