@extends('layout.layouts')
@section('title','Contacto')
@section('content')   
<div class="container bg-ligth shadow mt-5 py-3">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="text-center">Lista de Contacto </h2>
        <a href="/contacto/create" class="btn btn-primary">
            Nuevo Contacto
        </a>
    </div>
       
    <table class="table">
        <thead>
            <tr>
                <th>Detalle</th>
                <th>Nombre</th>
                <th>Cedula Identidad</th>
                <th>Acciones</th>
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
                    <td class="align-middle">{{$dato->nombre}} <span class="badge badge-info"> {{ $suma }} </span></td>
                    <td class="align-middle">{{$dato->ci}}</td>
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
</div> 
@endsection