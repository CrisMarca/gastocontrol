@extends('layout.layouts')
@section('title','Editar Contacto')

@section('content')
<div class="container mt-3 bg-ligth shadow py-3 px-4">
    <p class="h2 text-center">Editar Contacto</p>    
    <form action="/contacto/{{$contacto->id}}" method="POST">
        @method('PUT')
        @include('partials._forms-contacto',
        [
            'btnText' => 'Actualizar'
        ])  
    </form>
</div>
@endsection