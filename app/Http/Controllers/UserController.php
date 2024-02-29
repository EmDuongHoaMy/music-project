<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $users = User::paginate(30);
        }
        else{
            $users = User::where('name', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('phone_number', 'like', '%' . $keyword . '%')
            ->paginate(30);
        }
        return view('backend.user.index',compact('users','request'));

    }
    
    public function add(Request $request){
        $validate = $request->validate([
            'name'  =>'required',
            'email' =>'required|email|unique:users',
            'password'=>'required|min:8|confirmed'
        ]);
        $user = User::all();
        User::create([
            'name'  =>$request->input('name'),
            'email' =>$request->input('email'),
            'address'=>$request->input('address'),
            'phone_number'=>$request->input('phone_number'),
            'password'  =>Hash::make($request->input('password'))
        ]);
        return back()->with('success','Thêm mới thành công');
    }

    public function edit($id){
    $user = User::find($id);
        return view('backend.user.update',compact('user'));
    }

    public function update(Request $request,$id){
        // $validate = $request->validate([
        //     'name'  =>'required',
        //     'email' =>'required|email|unique:users',
        //     'password'=>'required|min:8|confirmed'
        // ]);
        DB::table('users')->where('id',$id)->update([
            'name'  =>$request->input('name'),
            'email' =>$request->input('email'),
            'address'=>$request->input('address'),
            'phone_number'=>$request->input('phone_number')
        ]);
        // $user = User::find($id);
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->address=$request->input('address');
        // $user->phone_number=$request->input('phone_number');
        // $user->save();
        return redirect(route('user.index'))->with('success','Cập nhật thông tin thành công');
    }

    public function delete($id){
        $user = User::findorFail($id);
        return view('backend.user.delete',compact('user'));
    }

    public function destroy(Request $request,$id){
        User::findorFail($id)->delete();
        return redirect(route('user.index'))->with('success','Xoá thông tin người dúng thành công');
    }
}
