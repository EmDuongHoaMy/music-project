<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $products = Products::paginate(8);
        }
        else{
            $products = Products::where('ten_sp', 'like', '%' . $keyword . '%')
            ->paginate(8);
        }
        return view('backend.products.index',compact('products','request'));
    }

    public function review($id){
        $products = Products::find($id);
        $other = Products::where('id','!=',$id)->paginate(4);
        return view('backend.products.review',compact('products','other'));
    }

    public function pay($id,Request $request){
        dd($id);die;
    }
}
