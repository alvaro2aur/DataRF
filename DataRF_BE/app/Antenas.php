<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antenas extends Model
{
    protected $table = 'antenas';
    protected $fillable = [
	    'marca',
	    'modelo',
	    'tipo',
	    'bandas',
	    'AV_900',
	    'AH_900',
	    'AV_1800',
	    'AH_1800',
	    'TE_900',
	    'TE_1800',
	    'GAN_900',
	    'GAN_1800',
	 ];
    //
}
