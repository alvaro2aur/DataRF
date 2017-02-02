<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clusters extends Model
{
    protected $table = 'clusters';
    protected $fillable = [
        'nombre',
    ];
/*
    public function estacion()
    {
        return $this->HasMany('App\Estaciones');
    }
*/
    public function estacion()
    {
        return $this->belongsTo('App\Estaciones');
    }

}
