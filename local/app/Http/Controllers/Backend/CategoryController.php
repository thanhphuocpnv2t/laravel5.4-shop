<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
    public function index() {
        $Categories = \DB::table('categories')->get();
        return view('backend.category.index', compact('Categories'));
    }

    public function create() {
        $Categories = \DB::table('categories')->get();
        return view('backend.category.add', compact('Categories'));

    }

    public function store(Request $request) {

    	$Categories = new Category;
        // Validate for input
        $this->validate($request , [
                'name' => 'required|unique:categories|max:20',
                'parent_id' => 'required',
                'alias' => 'required',
            ]);
        // Insert input
        $Categories->name = $request->name;
        $Categories->parent_id = $request->parent_id;
        $Categories->alias = $request->alias;
        // Check input
        if ($Categories->save()) {
            return redirect("/dashboard/category")->withSuccess('The category has been saved');
        }
    }
    

    public function show($id) {
        $Categories = Category::find($id);
        return view('backend.category.show', compact('Categories'));
    }


    public function edit($id) {
       $Categories = Category::find($id);
       $Categories_parent = \DB::table('categories')->get();
        return view('backend.category.edit', compact('Categories','Categories_parent'));
    }
}
