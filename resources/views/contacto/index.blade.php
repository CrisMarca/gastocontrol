@extends('layout.layouts')
@section('title','Contacto')
@section('content')    
    <h2 class="text-center">Lista de Contacto</h2><br><br>    
    <a href="/contacto/create" class="btn btn-primary">Nuevo Contacto</a><br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Detalle</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cedula Identidad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $dato)
                <tr>
                    <th scope="row">
                        <form action="/contacto/{{$dato->id}}">
                            @csrf
                            @method('GET')
                            <button class="btn btn-primary">Ver Contacto</button>
                        </form>
                    </th>
                    <td>{{$dato->nombre}}</td>
                    <td>{{$dato->ci}}</td>
                    <td class="form-inline">
                        <form action="/contacto/{{$dato->id}}/edit">
                            @csrf
                            @method('GET')
                            <button class="btn btn-success mr-1">Editar</button>
                        </form>
                        <form action="/contacto/{{$dato->id}}" method="POST">  
                            @csrf                          
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>              
            @endforeach    
        </tbody>
    </table>        
@endsection