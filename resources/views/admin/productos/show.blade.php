@extends('admin.layoutsAdmin.main')

@section('title', 'Detalles del Producto')

@section('content')
<div class="container">
    <h2>Detalles del Producto</h2>
    <div>
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> {{ $producto->precio }}</p>
        <img src="{{ asset($producto->image) }}" alt="{{ $producto->nombre }}" class="img-fluid">
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
