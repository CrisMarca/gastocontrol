@extends('layout.layouts')
@section('title','Contacto')

@section('content')
    <p class="h2 text-center">Registro de Contactos</p><br><br>
    @if( $errors->any() )        
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }} </p>
        @endforeach        
    @endif
    <form action="/contacto/{{$contacto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="nombre" value="{{$contacto->nombre}}">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="apellido" value="{{$contacto->apellido}}">
        <p>Ingrese su direccion : </p>
        <input type="text" class="form-control" name="direccion" value="{{$contacto->direccion}}">
        <p>Ingrese su cedula de identidad : </p>
        <input type="text" class="form-control" name="ci" value="{{$contacto->ci}}">
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="celular" value="{{$contacto->celular}}"> <br>
        <button class="btn btn-primary">Actualizar Contacto</button>
    </form>
@endsection