@extends('layouts.main')

@section('title', $producto->nombre)

@section('content')
<div class="container">
    <h2>{{ $producto->nombre }}</h2>
    <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="img-fluid">
    <p>{{ $producto->descripcion }}</p>
    <p>Precio: ${{ $producto->precio }}</p>
    <!-- Agregar botones u opciones para comprar o realizar otras acciones -->
    <a href="#" class="btn btn-primary">Comprar</a>
</div>
@endsection
