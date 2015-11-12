<?php

namespace cinema;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

	class Alquiler extends Model
	{
	    protected $table='alquilers';
	    
	    protected $fillable = [
	    'cliente_id', 
	    'movie_id',
	    'status_id',
	    'cantidad_ejem',
	    'registration_date',
	    'delivery_date'
	    ];
	
	public function cliente(){
        return $this->belongsTo('cinema\Cliente','cliente_id');
    }

    public function movie(){
        return $this->belongsTo('cinema\Movie','movie_id');
    }	
}
    
