@extends('layout.layouts')
@section('title','Contacto')

@section('content')
    <p class="h2 text-center">Registro de Contactos</p><br><br>
    @if( $errors->any() )        
        @foreach ($errors->all() as $error)
            <p class="alert alert-danger"> {{ $error }} </p>
        @endforeach        
    @endif
    <form action="/contacto" method="POST">
        @csrf 
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="apellido" value="{{ old('apellido') }}">
        <p>Ingrese su direccion : </p>
        <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
        <p>Ingrese su cedula de identidad : </p>
        <input type="text" class="form-control" name="ci" value="{{ old('ci') }}">
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="celular" value="{{ old('celular') }}"> <br>
        <button class="btn btn-primary">Registrar Contacto</button>
    </form>
@endsection