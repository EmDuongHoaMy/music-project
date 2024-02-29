<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function admin(){

        return view('backend.auth.login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        $credential =[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]; 

        if (Auth::attempt($credential)) {
            return redirect(route('home'))->with('success','Đăng nhập thành công');
        }
        return back()->with('error','Email hoặc mật khẩu không đúng');
    }

    public function logout(Request $request)
    {    
    Auth::logout();
     $request->session()->invalidate();
     $request->session()->regenerateToken();
     return redirect('/')->with('success','Bạn đã đăng xuất thành công');
    }

    public function sign(Request $request) {
        return view('backend.auth.sign');
    }

    public function signin(Request $request) {
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
        return redirect(route('auth.admin'))->with('success','Đăng ký thành công');
    }
}
