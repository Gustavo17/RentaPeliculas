<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;


class Director extends Model
{
    protected $table='directors';
    protected $fillable = ['nombre', 'nacionalidad'];
}
