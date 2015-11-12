		<div class="form-group">
		    <label  class="control-label col-lg-2 col-sm-2">Cliente:</label>
		    <div class="col-lg-10">

		        {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) !!}

		    </div>
		</div>
		<div class="form-group">
		    <label  class="control-label col-lg-2 col-sm-2">Pelicula:</label>
		    <div class="col-lg-10">

		        {!! Form::select('movie_id', $movies, null, ['class' => 'form-control']) !!}

		    </div>

		<div class="form-group">
			{!!Form::label('status_id','Estado:')!!}
			{!!Form::text('status_id',null,['class'=>'form-control','placeholder'=>'Ingresa el Estado','required'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('cantidad_ejem','Cantidad:')!!}
			{!!Form::text('cantidad_ejem',null,['class'=>'form-control','placeholder'=>'Ingresa la cantidad','required'])!!}
		</div>


		<div class="form-group">
		    <label class="control-label col-lg-2 col-sm-2">Fecha de Alquiler</label>
		    <div class="col-lg-8">
		        <div class="input-group input-large custom-date-range">

		            {!! Form::text('registration_date', null, ['class' => 'form-control form_datetime']) !!}

		            <span class="input-group-addon">A</span>

		            {!! Form::text('delivery_date', null, ['class' => 'form-control form_datetime']) !!}

		        </div>
		    </div>
		</div>