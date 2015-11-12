@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')

		<table class="table">
		<thead>
			<th>DNI</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Operaciones</th>
		</thead>
		@foreach($clientes as $cliente)
		<tbody>
			<td>{{$cliente->dni}}</td>
			<td>{{$cliente->nombre}}</td>
			<td>{{$cliente->direccion}}</td>
			<td>{{$cliente->telefono}}</td>
			<td>{!!link_to_route('cliente.edit', $title ='Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['cliente.destroy',$cliente->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
	
	@endsection