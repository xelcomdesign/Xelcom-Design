@extends('layout')
    @section('contenu_page')
    
        <br>
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Contactez-moi</h4>
                <div class="card-body">
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="prenom_nom" class="form-control  @error('prenom_nom') is-invalid @enderror" name="prenom_nom" id="prenom_nom" placeholder="Votre prenom_nom" value="{{ old('prenom_nom') }}">
                            @error('prenom_nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control  @error('numero_de_telephone') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
        
  
    @endsection