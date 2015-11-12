@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'cliente.store', 'method'=>'POST'])!!}
			@include('cliente.forms.clienteform')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@endsection