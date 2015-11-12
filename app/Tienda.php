<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table='tiendas';
    protected $fillable = ['ciudad', 'distrito','direccion'];
}
