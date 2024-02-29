<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Preview;

class PreviewController extends Controller
{
    public function Preview(){
        $preview = Preview::all();
        return view('item',compact('preview'));
    }
}
