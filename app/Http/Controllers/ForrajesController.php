<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForrajesController extends Controller
{
    public function gramineas(){
        return view('forrajes.gramineas');
    }
    public function leguminosas(){
        return view('forrajes.leguminosas');
    }
    public function leguminosasArbustas(){
        return view('forrajes.leguminosasArbustas');
    }
}
