<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controladora extends Model
{
    protected $table = 'controladoras';
    protected $fillable = [
	    'nombre',
	    'tecno_id',
	 ];
    public function celda()
    {
    	return $this->HasMany('App\Celda');
    }

}
