<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;


class CategoryController extends Controller
{
    public $title = array('Dashboard');

    public function index() {
        $this->title[] = 'View Category'; $title = $this->title;
        return view('backend.category.index', compact(['title']));
        // $Categories = \DB::table('Categories')->get();
        // return view('backend.category.index');
    }

    public function add() {
        $Categories = \DB::table('categories')->get();
        $this->title[] = 'Add Category'; $title = $this->title;
        return view('backend.category.add', compact(['title']), compact('Categories'));

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
}
