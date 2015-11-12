		<div class="form-group">
			{!!Form::label('titulo','Titulo:')!!}
			{!!Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingresa el Titulo','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('nacionalidad','Nacionalidad:')!!}
			{!!Form::text('nacionalidad',null,['class'=>'form-control','placeholder'=>'Ingresa la nacionalidad','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('productora','Productora:')!!}
			{!!Form::text('productora',null,['class'=>'form-control','placeholder'=>'Ingresa la Productora','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('anostreno','Año de Estreno:')!!}
			{!!Form::text('anostreno',null,['class'=>'form-control','placeholder'=>'Ingresa el año de estreno','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('ejemplares','Ejemplares:')!!}
			{!!Form::text('ejemplares',null,['class'=>'form-control','placeholder'=>'Ingresa la cantidad de ejemplares','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('estado','Estado de Conservacion:')!!}
			{!!Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ingresa el estado de conservacion','required'])!!}
		</div>	
		<div class="form-group">
		    <label  class="control-label col-lg-2 col-sm-2">Director de Pelicula:</label>
		    <div class="col-lg-10">

		        {!! Form::select('director_id', $directors, null, ['class' => 'form-control']) !!}

		    </div>
		</div>
		<div class="form-group">
		    <label  class="control-label col-lg-2 col-sm-2">Actor Principal:</label>
		    <div class="col-lg-10">

		        {!! Form::select('actor_id', $actors, null, ['class' => 'form-control']) !!}

		    </div>
		</div>
