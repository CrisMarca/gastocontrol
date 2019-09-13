@extends('layout.layouts')
@section('title','Contacto')

@section('content')
    <p class="h2 text-center">Registro de Contactos</p><br><br>
    <form action="/contacto" method="POST">
        @csrf
        <p>Ingrese su nombre : </p>
        <input type="text" class="form-control" name="name">
        <p>Ingrese su apellido : </p>
        <input type="text" class="form-control" name="lastname">
        <p>Ingrese su direccion : </p>
        <input type="text" class="form-control" name="address">
        <p>Ingrese su cedula de identidad : </p>
        <input type="text" class="form-control" name="cia">
        <p>Ingrese su numero de celular : </p>
        <input type="text" class="form-control" name="cellphone"> <br>
        <button class="btn btn-primary">Registrar Contacto</button>
    </form>
@endsection