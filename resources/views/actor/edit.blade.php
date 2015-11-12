@extends('layouts.admin')
	@section('content')
	@include('alerts.reques')
		{!!Form::model($actor,['route'=>['actor.update',$actor->id],'method'=>'PUT'])!!}
			@include('actor.forms.actorform')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}


	@endsection