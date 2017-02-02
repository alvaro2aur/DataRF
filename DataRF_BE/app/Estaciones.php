<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estaciones extends Model
{
    protected $table = 'estaciones';
    protected $fillable = [
	    'nombre',
	    'cluster_id',
	    'estado',
	    'ciudad',
	    'municipio',
	    'parroquia',
	    'direccion',
	    'longitud',
	    'latitud',
	    'estructura',
	    'altura',
	    'propietario',
	    'coubicacion',
	    'back2back',
	    'vendor',
	    'region',
	    'auditada',
	];

	public function celda()
	{
		return $this->HasMany('App\Celda');
	}

	public function cluster()
	{
		return $this->belongsTo('App\Clusters');
	}


	 
}
