<?php

namespace App\Http\Controllers;
use app\Models;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Home(){
        return view('home');
    }

    public function Author(){
        $author = Author::all();
        return view('author',compact('author'));
    }
}
