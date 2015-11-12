@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')

		<table class="table">
		<thead>
			<th>Nombre cliente</th>
			<th>Pelicula</th>
			<th>Estado</th>
			<th>Cantidad</th>
			<th>Fecha de Alquiler</th>
			<th>Fecha de Entrega</th>
			<th>Operaciones</th>
		</thead>
		@foreach($alquilers as $alquiler)
		<tbody>
			<td>{{$alquiler->cliente->nombre}}</td>
			<td>{{$alquiler->movie->titulo}}</td>
			<td>{{$alquiler->status_id}}</td>
			<td>{{$alquiler->cantidad_ejem}}</td>
			<td>{{$alquiler->registration_date}}</td>
			<td>{{$alquiler->delivery_date}}</td>
			<td>{!!link_to_route('alquiler.edit', $title ='Editar', $parameters = $alquiler->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['alquiler.destroy',$alquiler->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
	
	@endsection