@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')
		<div style="padding:15px;padding-left:0px;">	
                <a href="{!!URL::to('/pelicula/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
		</div>
		<table class="table">
		<thead>
			<th>Pelicula</th>
			<th>Nacionalidad</th>
			<th>Productora</th>
			<th>Fecha</th>
			<th>Operaciones</th>
		</thead>
		@foreach($movies as $movie)
		<tbody>
			<td>{{$movie->titulo}}</td>
			<td>{{$movie->nacionalidad}}</td>
			<td>{{$movie->productora}}</td>
			<td>{{$movie->anostreno}}</td>
			<td>{!!link_to_route('pelicula.edit', $title ='Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
		{!!$movies->render()!!}
	@endsection