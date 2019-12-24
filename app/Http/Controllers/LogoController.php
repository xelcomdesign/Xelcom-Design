<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function logos()
     
            {
           return view('logo');
    }
}
