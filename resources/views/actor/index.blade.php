@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')
		<div style="padding:15px;padding-left:0px;">	
                <a href="{!!URL::to('/actor/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
		</div>
		<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Nacionalidad</th>
			<th>Sexo</th>
			<th>Operaciones</th>
		</thead>
		@foreach($actors as $actor)
		<tbody>
			<td>{{$actor->nombre}}</td>
			<td>{{$actor->nacionalidad}}</td>
			<td>{{$actor->sexo}}</td>
			<td>{!!link_to_route('actor.edit', $title ='Editar', $parameters = $actor->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['actor.destroy',$actor->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
	
	@endsection