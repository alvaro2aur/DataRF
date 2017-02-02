<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtecno extends Model
{
    protected $table = 'subtecno';
    protected $fillable = [
	    'nombre',
	    'tecno_id',
	 ];

	public function celda()
    {
    	return $this->HasMany('App\Celda');
    }

    //
}
