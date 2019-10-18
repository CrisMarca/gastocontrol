@extends('layout.layouts')
@section('content')
    <div class="container">
        <div class="row px-auto py-4 d-flex align-items-center">
            <div class="col">
                <h3 class="text-center">Control de ingresos y gastos</h3>
                <p>
                    Este es un sistema desarrollado para control los gasto y ingresos de mis contactos.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minus nobis, libero corporis in nostrum itaque ipsa sapiente autem sit, laudantium sint explicabo aliquam est numquam ea cumque! Id, aperiam!
                </p>                
                <a href="/contacto" class="btn btn-outline-primary btn-block">Contactos</a>
                <a href="/gasto" class="btn btn-outline-success btn-block">Ingresos</a>
                <a href="/ingreso" class="btn btn-outline-danger btn-block">Gastos</a>                
            </div>
            <div class="col">
                <img src="/img/home.svg" alt="Imagen" class="img-fluid">
            </div>
        </div>
    </div>
@endsection