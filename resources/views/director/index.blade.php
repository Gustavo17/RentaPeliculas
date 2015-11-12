@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')
		<div style="padding:15px;padding-left:0px;">	
                <a href="{!!URL::to('/director/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
		</div>
		<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Nacionalidad</th>
			<th>Operaciones</th>
		</thead>
		@foreach($directors as $director)
		<tbody>
			<td>{{$director->nombre}}</td>
			<td>{{$director->nacionalidad}}</td>
			<td>{!!link_to_route('director.edit', $title ='Editar', $parameters = $director->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['director.destroy',$director->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
	
	@endsection
