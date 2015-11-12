		<div class="form-group">
			{!!Form::label('dni','DNI:')!!}
			{!!Form::text('dni',null,['class'=>'form-control','placeholder'=>'Ingrese el DNI del cliente','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del cliente','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('direccion','Direccion:')!!}
			{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa su direccion del cliente','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('telefono','Telefono:')!!}
			{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa su telefono del cliente','required'])!!}
		</div>