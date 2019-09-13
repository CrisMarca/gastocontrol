<?php

namespace App\Http\Controllers;

use App\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Gasto::all();
        return view('gasto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Gasto();
        $datos->nombre_g        =$request->name;
        $datos->descripcion_g   =$request->description;
        $datos->fecha_g        =$request->date;
        $datos->monto_g        =$request->mount;
        $datos->save();
        $datos=Gasto::all();
        return view('gasto.index', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(Gasto $gasto)
    {
        return view('gasto.show',compact('gasto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(Gasto $gasto)
    {
        return view('gasto.edit', compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gasto $gasto)
    {
        $gasto->nombre_g        =$request->name;
        $gasto->descripcion_g   =$request->description;
        $gasto->fecha_g         =$request->date;
        $gasto->monto_g         =$request->mount;
        $gasto->save();
        $datos=Gasto::all();
        return view('gasto.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gasto $gasto)
    {
        $gasto->delete();
        $datos=Gasto::all();
        return view('gasto.index', compact('datos'));
    }
}
