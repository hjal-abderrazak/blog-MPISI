@extends('layouts.app')
@section('content')




    <section class="py-5 container">
		<b> Nom :</b><p>{{ auth()->user()->name}}  </p>
		<br>
		<b> Email : </b><p>{{ auth()->user()->email}}</p>
		<br>
	    <b>Telephone  :</b>	<p>{{ auth()->user()->phone}}</p>
        <b>Role  :</b>	<p>{{ auth()->user()->role}}</p>

    </section>



@endsection
