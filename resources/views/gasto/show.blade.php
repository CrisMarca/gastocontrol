@extends('layout.layouts')
@section('title','Gasto')
@section('content')
    <div class="card text-center">
        <div class="h1 card-header">
            <p>{{$gasto->nombre_g}}</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">                
                Descripcion : {{ $gasto->descripcion_g}} <br> <br>
                Fecha : {{$gasto->fecha_g }} <br><br>         
                Monto del gato : {{ $gasto->monto_g }} <br><br>                
            </h5>            
        </div>    
        <div class="card-footer">
            <a href="/gasto" class="btn btn-primary">Volver</a>    
        </div>                
    </div>
@endsection