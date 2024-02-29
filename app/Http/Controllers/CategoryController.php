<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function Category(){
        $category = Category::all();
        return view('category',compact('category'));
    }
}
