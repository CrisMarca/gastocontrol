<?php

namespace App\Http\Controllers;

use Session;
use App\Contacto;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateContactoRequest;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Contacto::all();
        return view('contacto.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContactoRequest $request)
    {
        Contacto::create($request->validated());                
        Mail::to('marcacristian70@gmail.com')->send(new MessageReceived($request->validated()));
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view('contacto.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(CreateContactoRequest $request, Contacto $contacto)
    {        
        $request->validated();
        $contacto->nombre      =$request->nombre;
        $contacto->apellido    =$request->apellido;
        $contacto->direccion   =$request->direccion;
        $contacto->ci          =$request->ci;
        $contacto->celular     =$request->celular;
        $contacto->save();        
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {        
        $contacto->delete();
        $datos=contacto::all();        
        return view('contacto.index',compact('datos'));
    }
}
