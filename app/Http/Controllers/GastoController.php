<?php

namespace App\Http\Controllers;
use App\Gasto;
use Illuminate\Http\Request;
use App\Http\Requests\CreateGastoRequest;

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
        $suma=Gasto::sum('monto_g');
        return view('gasto.index',compact('datos', 'suma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create',[
            'gasto' => new Gasto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGastoRequest $request)
    {        
        Gasto::create($request->validated());        
        $datos=Gasto::all();
        $suma=Gasto::sum('monto_g');
        return view('gasto.index',compact('datos', 'suma'));
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
    public function update(CreateGastoRequest $request, Gasto $gasto)
    {
        $gasto->fill($request->validated());
        $gasto->save();
        $datos=Gasto::all();
        $suma=Gasto::sum('monto_g');
        return view('gasto.index',compact('datos', 'suma'));
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
        $suma=Gasto::sum('monto_g');
        return view('gasto.index',compact('datos', 'suma'));
    }
}
