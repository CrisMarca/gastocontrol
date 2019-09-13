@extends('layout.layouts')
@section('title','Gasto')
@section('content')
<div class="d-flex justify-content-between">
    <h3>Tabla de Gastos</h3>
    <a href="/gasto/create" class="btn btn-primary mb-1">Nuevo Gasto</a>
</div>
<div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Detalle </th>
                <th scope="col">Nombre de gasto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <th scope="row">
                        <form action="/gasto/{{$dato->id}}" method="POST">
                            @csrf
                            @method('GET')
                            <button class="btn btn-primary">Ver Gasto</button>
                        </form>
                    </th>
                    <td>{{$dato->nombre_g}}</td>
                    <td>{{$dato->fecha_g}}</td>
                    <td class="form-inline">                    
                        <form action="/gasto/{{$dato->id}}/edit" method="POST">
                            @method('GET')
                            <button class="btn btn-success mr-1">Editar</button>
                        </form>
                        <form action="/gasto/{{$dato->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>                        
            @endforeach
        </tbody>
    </table>
</div>
@endsection