<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function __construct(){
    }
    public function create()
    {
    return view ('devis');
}
public function store(Request $request){
   $data = $request->validate([
        "prenom_nom" => "required",
        "adresse_email" => "required",
        "telephone" => "required",
        "message" => "required",
       // "quantite" => "required",
       // "designation" => "required",
        ]);
 $devis = new \App\Devis();
    $devis->prenom_nom = $request->input('prenom_nom');
    $devis->adresse_email = $request->input('adresse_email');
    $devis->telephone = $request->input('telephone');
    $devis->message = $request->input('message');
  //  $devis->quantite = $request->input('quantite');
  //  $devis->designation = $request->input('designation');
    //dd("xelcom");
    $devis->save();
    return redirect('/');
}   
}
