<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estaciones;

class EstacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the data
        
        $this -> validate($request, [
            'nombre'     => 'required|max:20',
            'region'     => 'required|max:20',
            'cluster_id' => 'required|integer',
            'estado'     => 'required|max:20',
            'ciudad'     => 'required|max:20',
            'municipio'  => 'required|max:40',
            'parroquia'  => 'required|max:20',
            'direccion'  => 'required|max:200',
            'longitud'   => 'required|numeric',
            'latitud'    => 'required|numeric',
            'tipo'       => 'required|max:50',
            'altura'     => 'required|integer|max:99',
            'pisos'      => 'required|integer|max:99',
            'coubi_op'   => 'required|max:20',
            'coubi_acc'  => 'required|max:20',
            'vendor'     => 'required|max:20',
            'back2back'  => 'required|boolean'
            ]);
        
        //Store in the data base
        
        $estacion = new Estaciones;
        $estacion -> nombre = strtoupper($request -> nombre);
        $estacion -> region = title_case($request -> region);
        $estacion -> cluster_id = $request -> cluster_id;
        $estacion -> estado = title_case($request -> estado);
        $estacion -> ciudad = title_case($request -> ciudad);
        $estacion -> municipio = title_case($request -> municipio);
        $estacion -> parroquia = title_case($request -> parroquia);
        $estacion -> direccion = $request -> direccion;
        $estacion -> longitud = $request -> longitud;
        $estacion -> latitud = $request -> latitud;
        $estacion -> estructura = title_case($request -> estructura);
        $estacion -> altura = $request -> altura;
        $estacion -> pisos = $request -> pisos;
        $estacion -> coubi_op = strtoupper($request -> coubi_op);
        $estacion -> coubi_acc = strtoupper($request -> coubi_acc);
        $estacion -> vendor = strtoupper($request -> vendor);
        $estacion -> back2back = $request -> back2back;

        //dd($estacion);
        $estacion -> save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
