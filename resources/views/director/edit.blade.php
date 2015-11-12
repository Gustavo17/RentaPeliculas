@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($director,['route'=>['director.update',$director->id],'method'=>'PUT'])!!}
			@include('director.forms.usr')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection