@extends('layouts.admin')
	@section('style')
	{!!Html::style('js/bootstrap-datetimepicker/css/datetimepicker-custom.css')!!}
    @stop
	@section('content')
		{!!Form::open(['route'=>'alquiler.store', 'method'=>'POST'])!!}
			@include('alquiler.forms.alquilerform')	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		{!!Form::close()!!}
		
	@stop

@section('script')
	{!!Html::script('js/validation/jquery.validate.min.js')!!} 
	{!!Html::script('js/validation/validation-init.js')!!} 
	{!!Html::script('js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')!!} 
	{!!Html::script('js/pickers-init.js')!!} 
@stop