@extends('layout.layouts')
@section('title','Ingreso')
@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h3>Tabla de Ingresos</h3>
        <a href="/ingreso/create" class="btn btn-primary mb-1">Nuevo Ingreso</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Detalle </th>
                    <th scope="col">Nombre de Ingreso</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <th scope="row">
                            <form action="/ingreso/{{$dato->id}}" method="POST">
                                @csrf
                                @method('GET')
                                <button class="btn btn-primary">Ver Ingreso</button>
                            </form>
                        </th>
                        <td class="align-middle">{{$dato->nombre_i}}  <span class="badge badge-primary"> {{ $suma }} </span></td>
                        <td class="align-middle">{{$dato->fecha_i}}</td>
                        <td class="form-inline">                    
                            <form action="/ingreso/{{$dato->id}}/edit" method="POST">
                                @method('GET')
                                <button class="btn btn-success mr-1">Editar</button>
                            </form>
                            <form action="/ingreso/{{$dato->id}}" method="POST">
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
</div>
@endsection