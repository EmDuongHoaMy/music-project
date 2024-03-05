<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function add($id,Request $request){
        $products = Products::find($id);
        Bill::create([
            'id_sp' =>$id,
            'ten_sp'=>$products->ten_sp,
            'so_luong'=>$request->input('so_luong'),
            'size'  =>$request->input('size'),
            'id_khach'=>$request->input('id_khachhang'),
            'ten_khachhang'=>$request->input('ten_khachhang'),
            'dia_chi'=>$request->input('diachi_khachhang'),
            'phone_number'=>$request->input('phone_khachhang'),
            'gia_donhang'=>$request->input('gia_donhang'),
            'ghi_chu'=>$request->input('ghi_chu')
        ]);

        return redirect(route('product.review',$id))->with('success','Bạn đã mua thành công sản phẩm');
    }

    public function index(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $bills = Bill::paginate(30);
        }
        else{
            $bills = Bill::where('ten_sp', 'like', '%' . $keyword . '%')
            ->orWhere('id_khach', 'like', '%' . $keyword . '%')
            ->orWhere('id', 'like', '%' . $keyword . '%')
            ->paginate(30);
        }
        return view('backend.bills.index',compact('request','bills'));
    }
}
