<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Ingreso::all();
        $suma=Ingreso::sum('monto_i');
        return view('ingreso.index', compact('datos', 'suma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Ingreso();
        $datos->nombre_i        =$request->name;
        $datos->descripcion_i   =$request->description;
        $datos->fecha_i        =$request->date;
        $datos->monto_i        =$request->mount;
        $datos->save();
        $datos=Ingreso::all();
        $suma=Ingreso::sum('monto_i');
        return view('ingreso.index', compact('datos', 'suma'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        return view('ingreso.show', compact('ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingreso.edit', compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $ingreso->nombre_i        =$request->name;
        $ingreso->descripcion_i   =$request->description;
        $ingreso->fecha_i         =$request->date;
        $ingreso->monto_i         =$request->mount;
        $ingreso->save();
        $datos=Ingreso::all();
        $suma=Ingreso::sum('monto_i');
        return view('ingreso.index', compact('datos', 'suma'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();
        $datos=Ingreso::all();        
        return view('ingreso.index',compact('datos'));
    }
}
