<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Celda;
use App\Tiltelectico;
use App\Tiltmecanico;
use App\Azimut;
use App\Clusters;

class CeldasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clusters = Clusters::all();
        $celdas = Celda::with(
            'controladora',
            'antenas',
            'estacion',
            'te',
            'tm',
            'az'
            )->get();
        //$celdas->merge(collect($clusters));
        
        /*
        $te = Tiltelectico::with('celdas')->get();
        $tm = Tiltmecanico::all();
        $az = Azimut::all();
        $ArrayTabla=collect([]);
        for ($i=0; $i< $celdas->count(); $i++) {
            $ArrayTabla->push(collect($celdas[$i])->only('nombre','ret'));
            $ArrayTabla[$i]->put('region', $celdas[$i]->estacion->region);
            $ArrayTabla[$i]->put('cluster', $celdas[$i]->estacion->cluster->nombre);
            $ArrayTabla[$i]->put('controladora', $celdas[$i]->controladora->nombre);
            $ArrayTabla[$i]->put('marca', $celdas[$i]->antenas->marca);
            $ArrayTabla[$i]->put('modelo', $celdas[$i]->antenas->modelo);
            $ArrayTabla[$i]->put('az', $az -> where('celda_id', $celdas[$i] -> id) -> first() -> valor);
            $ArrayTabla[$i]->put('te', $te -> where('celda_id', $celdas[$i] -> id) -> first() -> valor);
            $ArrayTabla[$i]->put('tm', $tm -> where('celda_id', $celdas[$i] -> id) -> first() -> valor);
            # code...
        }
        
        //$ArrayTabla=$celdas[0]->estacion->region;
        return $ArrayTabla;
        */
        
        return $celdas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $celda = Celda::find($id);
        $celdas = Celda::all();
        $azimuts = Azimut::all();
        $tes = Tiltelectico::all();
        $tms = Tiltmecanico::all();
        $nroceldasGSM900 = $celdas->where('estacion_id', $celda->estacion_id)
                                  ->where('subtecno_id', '1')
                                  ->count();
        $nroceldasDSC1800 = $celdas->where('estacion_id', $celda->estacion_id)
                                   ->where('subtecno_id', '2')
                                   ->count();
        $nroceldasF1 = $celdas->where('estacion_id', $celda->estacion_id)
                              ->where('subtecno_id', '3')
                              ->count();
        $nroceldasF2 = $celdas->where('estacion_id', $celda->estacion_id)
                              ->where('subtecno_id', '4')
                              ->count();
        $nroceldasLTE = $celdas->where('estacion_id', $celda->estacion_id)
                               ->where('subtecno_id', '5')
                               ->count();
        $controladoras = $celdas->where('estacion_id', $celda->estacion_id);
        $azimuts = $azimuts->where('celda_id', $id);
        $tes = $tes->where('celda_id', $id);
        $tms = $tms->where('celda_id', $id);
        //dd($azimuts->toArray());
        /*
        return view('detalle', compact('celda',
                                       'nroceldasGSM900',
                                       'nroceldasDSC1800',
                                       'nroceldasF1',
                                       'nroceldasF2',
                                       'nroceldasLTE',
                                       'controladoras',
                                       'azimuts',
                                       'tes',
                                       'tms'));
        */
        return $celda;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
