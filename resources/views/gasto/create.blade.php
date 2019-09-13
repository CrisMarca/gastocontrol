@extends('layout.layouts')
@section('title','Nuevo Gasto')
@section('content')
    <h2>Registro de Gasto</h2><br><br>
    <form action="/gasto" method="POST">
        @csrf
        <p>Nombre de Gasto : </p>
        <input type="text" class="form-control" name="name"><br>
        <p>Descripcion de Gasto : </p>
        <input type="text" class="form-control" name="description"><br>
        <p>Fecha del Gasto : </p>
        <input type="date" class="form-control" name="date"><br>
        <p>Monto del Gasto : </p>
        <input type="text" class="form-control" name="mount"><br>
        <button class="btn btn-primary">Registrar Gasto</button>
    </form>
    @endsection