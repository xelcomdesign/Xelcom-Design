<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
//creation d'une méthode pour gérer l’enregistrement des fichiers uploadé

//public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
  //  $name = !is_null($filename) ? $filename : str_random('25');
   // $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
 
  //  return $file;}
 

//-end---Upload de fichier----->
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //Creation de l’action index. Liste des produits
    {
       $products = \App\Product::orderBy('created_at', 'DESC')->get();
       return view('products.index', compact('products'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        {
            $categories = \App\Category::pluck('name','id');
            return view('products.create', compact('categories'));
         }
         

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
           $produit = new \App\Product();
           $produit->name = $request->input('name');
           $produit->Prix = $request->input('prix');
           $produit->description = $request->input('description');
           $produit->category_id = $request->input('category_id');

           $produit->save();
           return redirect('/');

           {
            $data = $request->validate([
                'name'=>'required|min:5',
                'price' => 'required|max:7|numeric',
                'description' => 'max:1000000'
            ]);
            $produit = new Product();
            $produit->name = $request->input('name');
            $produit->price = $request->input('price');
            $produit->description = $request->input('description');
            $produit->category_id = $request->input('category_id');
            $produit->save();

           
         }
         
        }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
        {
           //on recupere le produit
            $product = \App\Product::find($id);
            $categories = \App\Category::pluck('name','id');
            return view('products.edit', compact('product','categories'));
         
         
        }
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function update(Request $request, $id)
        {
           $product = \App\Product::find($id);
           if($product){
               $product->update([
                   'name' => $request->input('name'),
                   'price' => $request->input('price'),
                   'description' => $request->input('description'),
                   'category_id'=>$request->input('category_id'),
               ]);
           }
           return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //  public function destroy($id)
    {
        //
    }

