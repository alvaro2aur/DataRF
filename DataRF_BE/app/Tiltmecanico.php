<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiltmecanico extends Model
{
    protected $table = 'tiltmecanico';
    protected $fillable = [
        'valor',
        'celda_id'
    ];

    public function celdas()
    {
    	return $this->belongsTo('App\Celda');
    }

}
