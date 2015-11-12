@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'director.store', 'method'=>'POST'])!!}
			@include('director.forms.usr')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@endsection