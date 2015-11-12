@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($tienda,['route'=>['tienda.update',$tienda->id],'method'=>'PUT'])!!}
			@include('tienda.forms.tiendaform')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection