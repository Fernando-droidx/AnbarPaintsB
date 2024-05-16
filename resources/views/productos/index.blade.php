@extends('layouts.main')

@section('title', 'Lista de Productos')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Lista de Productos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>${{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary btn-sm">Ver detalles</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

