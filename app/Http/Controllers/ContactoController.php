<?php

namespace App\Http\Controllers;
use App\Contacto;
use App\Gasto;
use App\Ingreso;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateContactoRequest;

class ContactoController extends Controller
{
    public function redirectToProvider($provider)
    {
        config(['services.' . $provider . '.redirect' => route('provider.callback', [$provider])]);
        return Socialite::driver($provider)->redirect();
    }

    /**
    * Get the user information from provider.
    *
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Contacto::all();
        $suma = Ingreso::sum('monto_i') - Gasto::sum('monto_g');
        return view('contacto.index', compact('datos','suma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create',
        [
            'contacto' => new Contacto
        ]);
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
        $datos = Contacto::all();
        $suma = Ingreso::sum('monto_i') - Gasto::sum('monto_g');
        return view('contacto.index', compact('datos','suma'));
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
        $contacto->fill($request->validated());        
        $contacto->save();        
        $datos = Contacto::all();
        $suma = Ingreso::sum('monto_i') - Gasto::sum('monto_g');
        return view('contacto.index', compact('datos','suma'));
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
        $datos = Contacto::all();
        $suma = Ingreso::sum('monto_i') - Gasto::sum('monto_g');
        return view('contacto.index', compact('datos','suma'));
    }
}
