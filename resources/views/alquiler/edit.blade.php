@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($alquilers,['route'=>['alquiler.update',$alquilers->id],'method'=>'PUT'])!!}
			@include('alquiler.forms.alquilerform')	
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection