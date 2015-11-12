		<div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del actor','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('nacionalidad','Nacionalidad:')!!}
			{!!Form::text('nacionalidad',null,['class'=>'form-control','placeholder'=>'Ingresa la nacionalidad','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('sexo','sexo:')!!}
			{!!Form::text('sexo',null,['class'=>'form-control','placeholder'=>'Ingresa el sexo','required'])!!}
		</div>