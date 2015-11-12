<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
   	protected $table='actors';
   	protected $fillable = ['nombre', 'nacionalidad','sexo'];
}
