@extends('layout.layouts')
@section('title','Editar Gasto')
@section('content')
    <h2>Editar Ingreso</h2><br><br>
    <form action="/ingreso/{{$ingreso->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nombre de ingreso : </p>
        <input type="text" class="form-control" name="name" value="{{$ingreso->nombre_i}}"><br>
        <p>Descripcion de ingreso : </p>
        <input type="text" class="form-control" name="description" value="{{$ingreso->descripcion_i}}"><br>
        <p>Fecha del ingreso : </p>
        <input type="date" class="form-control" name="date" value="{{$ingreso->fecha_i}}"><br>
        <p>Monto del ingreso : </p>
        <input type="text" class="form-control" name="mount" value="{{$ingreso->monto_i}}"><br>
        <button class="btn btn-primary">Actualizar ingreso</button>
    </form>
@endsection