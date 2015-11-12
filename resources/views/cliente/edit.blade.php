@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($cliente,['route'=>['cliente.update',$cliente->id],'method'=>'PUT'])!!}
			@include('cliente.forms.clienteform')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection