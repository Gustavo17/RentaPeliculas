@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($movies,['route'=>['pelicula.update',$movies->id],'method'=>'PUT'])!!}
			@include('pelicula.forms.peliculaform')	
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection