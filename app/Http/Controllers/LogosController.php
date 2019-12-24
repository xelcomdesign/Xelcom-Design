<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogosController extends Controller
{
    public function index()
    {
    return view ('/products/logos');
    }
    public function show(){
        $products = \App\Product::all();
        return view('flyer',compact('products'));
    }
}
