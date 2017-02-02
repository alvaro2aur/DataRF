<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Azimut extends Model
{
    protected $table = 'azimut';
    protected $fillable = [
        'valor',
        'celda_id'
    ];
	
	public function celdas()
    {
    	return $this->belongsTo('App\Celda');
    }//
}
