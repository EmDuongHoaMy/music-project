<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acticle;
class ActicleController extends Controller
{
    public function Acticle(){
        $acticle = Acticle::all();
        return view('acticle',compact('acticle'));
    }
}
