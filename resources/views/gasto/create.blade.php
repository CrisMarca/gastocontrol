@extends('layout.layouts')
@section('title','Nuevo Gasto')

@section('content')
<div class="container bg-ligth shadow py-3 px-4 mt-3">    
    <h2>Registro de Gasto</h2>            
    <form action="/gasto" method="POST">            
        @include('partials._forms-gasto',[
            'btnText' => 'Guardar'
        ])
    </form>    
</div>
@endsection