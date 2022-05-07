@extends('layouts.app')
@section('content')




    <section class="py-5 text-center container">
		<div class="row py-lg-5">
		  <div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="fw-light">Apprendre la programmation</h1>
			<p class="lead text-muted">Ce site vous propose une
			 formation gratuite en langages de programmation. 
			 Les différentes formations sont accompagnées par des 
			 vidéos explicatives pour une meilleure maîtrise.</p>
			<p>
			  <a href="register.html" class="btn btn-primary my-2">Créer un compte</a>
			</p>
		  </div>
		</div>
    </section>

    <div class="py-5 bg-light">
		<div class="container">

		  <h1 class="pb-5 text-center fw-light"><strong>Formations</strong></h1>
		  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($cours as $cour)
			<div class="col">
			  <div class="card shadow-sm">
				<!-- https://mdbootstrap.com/docs/standard/components/cards/ -->
				<img src="{{ $cour->icone }}" class="card-img-top" alt="..."/>
				<div class="card-body">
				  <h5 class="card-title">{{ $cour->nom }}</h5>
				  <p class="card-text">{{ $cour->description }}</p>
				  <a class="btn btn-sm btn-outline-primary" href="{{ url('course',$cour->id) }}" 
				  data-tr="tr_{{$cour->id}}" role="button">Voir</a>
				@guest
					 
				@else
				  @if (Auth::user()->role=="admin")
				  <a class="btn btn-danger" href="{{ url('deletecourse',$cour->id) }}" data-tr="tr_{{$cour->id}}" role="button">delete</a>

				  @endif
				  @endguest
				</div>
			  </div>
			</div>
            @endforeach


		  </div>
		</div>
    </div>

    <section class="py-5 text-center container">
		<div class="row">
		  <div class="col-lg-6 col-md-8 mx-auto">
			<h1 class="text-center fw-light"><strong>Nous Contacter</strong></h1>
			<p class="lead text-muted">Pour tous vos besoins et toutes vos idées, n'hésitez pas à nous contacter.</p>
			<a href="contact.html" class="btn btn-outline-primary my-2">Nous Contacter</a>
		  </div>
		</div>
    </section>

@endsection


	