<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';    
    protected $fillable = ['titulo', 'nacionalidad','productora','anostreno','ejemplares','estado','director_id','actor_id'];
}
