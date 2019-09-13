@extends('layout.layouts')
@section('title','Contacto')

@section('content')
    <p class="h2 text-center">Registro de Contactos</p><br><br>
    <form action="/contacto/{{$contacto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="name" value="{{$contacto->nombre}}">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="lastname" value="{{$contacto->apellido}}">
        <p>Ingrese su direccion : </p>
        <input type="text" class="form-control" name="address" value="{{$contacto->direccion}}">
        <p>Ingrese su cedula de identidad : </p>
        <input type="text" class="form-control" name="cia" value="{{$contacto->ci}}">
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="cellphone" value="{{$contacto->celular}}"> <br>
        <button class="btn btn-primary">Actualizar Contacto</button>
    </form>
@endsection