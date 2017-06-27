<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Request;

class ProductController extends Controller
{
    public function detail($id){
        $model = DB::select('select * from products where id = ?', [$id]);
        return view('frontend.product.detail', ['model' => $model]);
    }

    public function compare($id_1, $id_2){
        $model_1 = DB::select('select * from products where id = ?', [$id_1]);
        $model_2 = DB::select('select * from products where id = ?', [$id_2]);
        return view('frontend.product.compare', ['model_1' => $model_1, 'model_2' => $model_2]);
    }
}
