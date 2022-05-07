@extends('layouts.app')
@section('content')

<section class="py-5 container">
	<h2>{{ $course->nom }}</h1>
	<br>
	<p>{{ $course->texte }}</p>
</section>

@endsection

