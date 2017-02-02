<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celda extends Model
{
    protected $table = 'celdas';
    protected $fillable = [
	    'nombre',
        'estacionid',
        'cellindex',
	    'cellid',
	    'sector',
	    'tecno_id',
	    'controladora_id',
	    'subtecno_id',
	    'lac',
	    'rac',
	    'ura',
	    'psc',
	    'uarfcnDl',
	    'urafcnUl',
        'ncc',
        'bcc',
        'bsic',
        'altura',
	    'ret',
        'indoor',
	    'antenas_id',
	    'estacion_id',
    ];

    protected $hidden = [
    //    'te',
    //    'tm',
    //    'az'
    
    ];


    /*
    Esta funcion obtiene cualquier atributo del
    segun del id
    
    // code for $this->controladora attribute
    //add the controladora attribute to the array
    protected $appends = array('Valor');

    public function getValorAttribute($value) {
        //dd($this);
        $Valor = null;
        //dd($this->te);
        if ($this->te && $this->tm && $this->az) {
            $Valor = [
                'te' => $this->te->first()->valor,
                'tm' => $this->tm->first()->valor,
                'az' => $this->az->first()->valor
                ];
        }
        return $Valor;
    }
    
    */    
    /*
    Esta funcion obtiene cualquier atributo del
    segun del id

    public function toArray() {
        // get the original array to be displayed
        $celdas = parent::toArray();
        
        // change the value of the 'mime' key
        if ($this->controladora) {
            $celdas['controladora_id'] = $this->controladora->nombre;
            //dd($celdas);
        } else {
            $celdas['controladora_id'] = null;
        }
        return $celdas;
    }
    */


    public function estacion()
    {
        return $this->belongsTo('App\Estaciones');
    }

    public function controladora()
    {
        return $this->belongsTo('App\Controladora');
    }




    public function antenas()
    {
        return $this->belongsTo('App\Antenas');
    }

    public function te()
    {
    	return $this->HasMany('App\Tiltelectico');
    }

    public function tm()
    {
    	return $this->HasMany('App\Tiltmecanico');
    }

	public function az()
    {
    	return $this->HasMany('App\Azimut');
    }

    public function subtecno()
    {
        return $this->belongsTo('App\Subtecno');
    }

    

}
