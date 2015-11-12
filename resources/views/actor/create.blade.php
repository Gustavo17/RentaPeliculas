@extends('layouts.admin')
	@section('content')
		{!!Form::open(['route'=>'actor.store', 'method'=>'POST'])!!}
			@include('actor.forms.actorform')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@endsection