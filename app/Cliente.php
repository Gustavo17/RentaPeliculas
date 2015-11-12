<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';
    protected $fillable = ['dni', 'nombre','direccion','telefono'];
}
