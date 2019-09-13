@extends('layout.layouts')
@section('title','Gasto')
@section('content')
    <div class="card text-center">
        <div class="h1 card-header">
            <p>{{$ingreso->nombre_i}}</p>
        </div>
        <div class="card-body">
            <h5 class="card-title">                
                Descripcion : {{ $ingreso->descripcion_i}} <br> <br>
                Fecha : {{$ingreso->fecha_i }} <br><br>         
                Monto del gato : {{ $ingreso->monto_i }} <br><br>                
            </h5>            
        </div>    
        <div class="card-footer">
            <a href="/ingreso" class="btn btn-primary">Volver</a>    
        </div>                
    </div>
@endsection