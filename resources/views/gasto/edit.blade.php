@extends('layout.layouts')
@section('title','Editar Gasto')

@section('content')
<div class="container bg-ligth shadow py-3 px-3 mt-3">
    <h2>Editar Gasto</h2>
    <form action="/gasto/{{$gasto->id}}" method="POST">
        @method('PUT')        
        @include('partials._forms-gasto',[
            'btnText' => 'Actualizar'
        ])
    </form>
</div>
@endsection