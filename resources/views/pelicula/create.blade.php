@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'pelicula.store', 'method'=>'POST'])!!}
			@include('pelicula.forms.peliculaform')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@endsection