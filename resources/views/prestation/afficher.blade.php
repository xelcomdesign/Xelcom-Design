@extends('layout')
@section('contenu_page')
        <!--ajoute de bouttons -->
    <form >   
        <input type="submit" name="valider" value="Plus de Prestations"/>
    </form>
<section>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/products/flyer1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Flyser </h3>
        <p>Un flyer professionnel et personnalisé peut toujours attirer les gens.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/products/carte1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Carte de Visite </h5>
        <p>Choisissez parmi nos modèles différents en ligne.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/products/carte taysir.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Carte de membre</h5>
        <p>
Pour les besoins de votre association, Canva est là : créez vos cartes de membre, cartes de club ou cartes d'adhérents en toute simplicité.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
@endsection