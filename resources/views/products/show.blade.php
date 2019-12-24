@extends("layout")
@section("contenu_page")
<a href="carte" class="btn btn-info">cartes</a>

			</div>
		</div>
	</div>
</section>

<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Résultats pour "Carte de Visite"</h2>
					<p>99 Résultats du 01 Janvier 2020</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
				
					<div class="widget category-list">
	<h4 class="widget-header">Clients</h4>
	<ul class="category-list">
		<li><a href="category.html">CocoTex <span>93</span></a></li>
		<li><a href="category.html">Xelcom-Design <span>233</span></a></li>
		<li><a href="category.html">Commuity Dev/Sec  <span>183</span></a></li>
		<li><a href="category.html">Bokoo Car <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Conceptions</h4>
	<ul class="category-list">
		<li><a href="category.html">Brochures <span>93</span></a></li>
		<li><a href="{{route('flyer')}}">Flyers <span>233</span></a></li>
		<li><a href="#">Depliants  <span>183</span></a></li>
		<li><a href="{{route('carte')}}">Cartes de Visite <span>120</span></a></li>
		<li><a href="#">Entetes <span>40</span></a></li>
		<li><a href="{{route('logos')}}">Logos <span>81</span></a></li>
	</ul>

</div>

<div class="widget filter">
	<h4 class="widget-header">Afficher les produits</h4>
	<select>
		<option>Popularité</option>
		<option value="1">Les mieux notés</option>
		<option value="2">Prix ​​le plus bas</option>
		<option value="4">Le prix le plus élevé</option>
	</select>
</div>

<div class="widget price-range">
	<h4 class="widget-header">Échelle des prix</h4>
	<div class="block">
		<b>Fcfa5000</b>
		<input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/> 
		<b>Fcfa25000</b>
	</div>
</div>

<div class="widget product-shorting">
	<h4 class="widget-header">Par condition</h4>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	   Type 1
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Type 2
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Type 3
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	   Top
	  </label>
	</div>
</div>

				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Short</strong>
							<select>
								<option>Le plus récent</option>
								<option value="1">PLus Populaire</option>
								<option value="2">Prix ​​le plus bas</option>
								<option value="4">Le prix le plus élevé</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="javascript:void(0);"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                
               <!-- liste des cadre et produits--->
                <div class="product-grid-list">
					<div class="row mt-30">
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
<!--p1er----------------------------------->
		<div class="card-body"> 
		   <div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<a href="{{route('realisation')}}">
				<img class="product-item " src="{{asset('images/products/c1.jpg')}}" alt="LOGO">
            </a>
           
		</div>
		    	
		    
		</div>
	</div>
</div>

	</div>
	<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
<!--2em-----------carte cocotex------------------------>
<div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c2.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                    <!--- 3em-------------------------->       
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c3.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
                            <!--4em -------------------->
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c4.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c4.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c3.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c2.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
                            <div class="card-body">
		    
            <div class="product-item bg-light">
     <div class="card">
         <div class="thumb-content">
             <a href="{{route('realisation')}}">
                 <img class="product-item " src="{{asset('images/products/c1.jpg')}}" alt="LOGO">
             </a>
         </div>
                 
             
         </div>
     </div>
 </div>
 
 
     </div>
						<div class="col-sm-12 col-lg-4 col-md-6">



						</div>
					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection