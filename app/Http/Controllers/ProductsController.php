<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $products = Products::paginate(10);
        }
        else{
            $products = Products::where('ten_sp', 'like', '%' . $keyword . '%')
            ->paginate(10);
        }
        return view('backend.products.index',compact('products','request'));
    }

    public function review($id){
        echo $id;die;
    }
}
