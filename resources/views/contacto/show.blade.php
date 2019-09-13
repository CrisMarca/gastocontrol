@extends('layout.layouts')
@section('title','Contacto')
@section('content')
    <div class="card text-center">
        <div class="h1 card-header">
            <p>Tarjeta de Contacto</p>
        </div>
        <div class="card-body">
            <h3 class="card-title">
                Nombre : {{ $contacto->nombre }} <br><br>
                Apellido : {{ $contacto->apellido}} <br> <br>
                Cedula de Identidad : {{ $contacto->ci }} <br><br>         
                Direccion : {{ $contacto->direccion }} <br><br>
                Numero Celular : {{ $contacto->celular }}    <br>
            </h3>            
        </div>    
        <div class="card-footer">
            <a href="/contacto" class="btn btn-primary">Volver</a>    
        </div>                
    </div>
@endsection