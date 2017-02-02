<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiltelectico extends Model
{
    protected $table = 'tiltelectrico';
    protected $fillable = [
        'valor',
        'celda_id'
    ];

    public function celdas()
    {
    	return $this->belongsTo('App\Celda');
    }
}
