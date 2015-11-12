@extends('layouts.admin')

@section('content')
	@include('alerts.reques')

	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}

@stop