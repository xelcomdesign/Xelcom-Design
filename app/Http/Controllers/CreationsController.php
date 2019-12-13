<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreationsController extends Controller
{
    public function show($id){
    return"je suis la page creations $id";
}
}