@extends('layout')
@section('contenu_page')
<table class="table table-striped">
       <tr>
           <th>#</th>         
           <th>Nom Produit<a href=""></th>  
           <th>Quantite</th>         
           <th>Description</th> 
           <th>Prix Produit</th>  
           <th>Validation</th>    
       </tr>
       @foreach($products as $product)
           <tr>
               <th>#</th>
               <th> 
                {{$product->name}} 
               </th>    
               <th>{{$product->Quantite}} {{ $product->category->name ?? '' }}</th>
               <th>{{$product->Description}} {{ $product->category->name ?? '' }}</th>
               <th>{{$product->Prix}} {{ $product->category->name ?? '' }}</th>
               <th><a href="">{{$product->Image}}
              <i class="fa fa-check" aria-hidden="true"></i>{{ $product->category->name ?? 'valide' }} </th>
              <th><p><a href="{{route('editer_produit',['id'=>$product->id])}}">Editer</a></p></th>
           </tr>
       @endforeach
   </table>
@endsection