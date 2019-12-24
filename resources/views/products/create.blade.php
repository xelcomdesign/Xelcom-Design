@extends('layout')
@section('contenu_page')
<div class="container">
<div> @foreach($errors as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
</div>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
       <div><p><a href="{{route('product.index')}}"><h2>{{__('Enregistrement d\'un produit')}}</h2></a></p></div>
       <div class="container">
           <form action="{{route('product.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="name" class="form-control" placeholder="la  quantite ">
               </div>
               <div>
                   <input type="text" name="prix" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <select name="category_id" id="category_id" class="form-control">
       <option value=""></option>
      
   </select>
   
   <!--ajouter un champ pour charger une image-->

 <div><input type="file" name="product_image" class="form-control"></div>
</div>

   <!--afficher des erreurs -->

@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
@endsection