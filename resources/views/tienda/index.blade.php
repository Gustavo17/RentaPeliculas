@extends('layouts.admin')

	@section('content')
		@include('alerts.success')
		@include('alerts.reques')

		<table class="table">
		<thead>
			<th>Ciudad</th>
			<th>Distrito</th>
			<th>Direccion</th>
			<th>Operaciones</th>
		</thead>
		@foreach($tiendas as $tienda)
		<tbody>
			<td>{{$tienda->ciudad}}</td>
			<td>{{$tienda->distrito}}</td>
			<td>{{$tienda->direccion}}</td>
			<td>{!!link_to_route('tienda.edit', $title ='Editar', $parameters = $tienda->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
			<td>
				{!!Form::open(['route'=>['tienda.destroy',$tienda->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
				{!!Form::close()!!}

			</td>
		</tbody>
		@endforeach
		</table>
	
	@endsection