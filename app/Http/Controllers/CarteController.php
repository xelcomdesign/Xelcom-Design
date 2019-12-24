<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarteController extends Controller
{
    public function create(){
        return view ('/carte');
}
}
