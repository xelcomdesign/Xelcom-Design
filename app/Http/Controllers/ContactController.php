<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
     
            {
           return view('/contact');
    }

    public function create(){
        return view('/contact');
    }
    public function store(Request $request){
        $request->validate([
            "email" => "required",
            "message" => "required",
            "prenom_nom" => "required",

        ]);
        $contact = new \App\Contact();
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->prenom_nom = $request->input('prenom_nom');
        #dd("tout va bien");
        $contact->save();
        return redirect('/');
    }
    
}