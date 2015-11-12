@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'tienda.store', 'method'=>'POST'])!!}
			@include('tienda.forms.tiendaform')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@endsection