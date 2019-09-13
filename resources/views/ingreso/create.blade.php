@extends('layout.layouts')
@section('title','Nuevo Gasto')
@section('content')
    <h2>Registro de Ingreso</h2><br><br>
    <form action="/ingreso" method="POST">
        @csrf
        <p>Nombre de Ingreso : </p>
        <input type="text" class="form-control" name="name"><br>
        <p>Descripcion de Ingreso : </p>
        <input type="text" class="form-control" name="description"><br>
        <p>Fecha delIngreso : </p>
        <input type="date" class="form-control" name="date"><br>
        <p>Monto del Ingreso : </p>
        <input type="text" class="form-control" name="mount"><br>
        <button class="btn btn-primary">Registrar Ingreso</button>
    </form>
    @endsection