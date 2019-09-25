@extends('layout.layouts')
@section('title','Crear Contacto')

@section('content')
<div class="container mt-3 bg-ligth shadow py-3 px-4">
    <p class="h2 text-center">Registro de Contacto</p>
    <form action="/contacto" method="POST">           
        @include('partials._forms-contacto',
        [
            'btnText' => 'Guardar'
        ])          
    </form> 
</div>
@endsection