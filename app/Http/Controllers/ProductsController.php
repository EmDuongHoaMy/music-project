<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $id_kh = Auth::id();
        $user = User::find($id_kh);
        $products = Products::find($id);
        $so_luong = $request->input('so_luong');
        $size = $request->input('size');
        if ($so_luong<2) {
            $thanh_tien = $products->gia_sp*$so_luong + 30000;
        }
        else{
            $thanh_tien = $products->gia_sp*$so_luong;
        }
        return view('backend.products.pay',compact('user','products','size','so_luong','thanh_tien'));
    }
}
