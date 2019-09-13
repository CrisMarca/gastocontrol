@extends('layout.layouts')
@section('title','Editar Gasto')
@section('content')
    <h2>Editar Gasto</h2><br><br>
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nombre de Gasto : </p>
        <input type="text" class="form-control" name="name" value="{{$gasto->nombre_g}}"><br>
        <p>Descripcion de Gasto : </p>
        <input type="text" class="form-control" name="description" value="{{$gasto->descripcion_g}}"><br>
        <p>Fecha del Gasto : </p>
        <input type="date" class="form-control" name="date" value="{{$gasto->fecha_g}}"><br>
        <p>Monto del Gasto : </p>
        <input type="text" class="form-control" name="mount" value="{{$gasto->monto_g}}"><br>
        <button class="btn btn-primary">Actualizar Gasto</button>
    </form>
@endsection