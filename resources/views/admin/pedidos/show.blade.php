@extends('admin.layoutsAdmin.main')

@section('title', 'Detalles del Pedido')

@section('content')
<div class="container">
    <h2>Detalles del Pedido</h2>
    <a href="{{ route('admin.pedidos.index') }}" class="btn btn-secondary">Volver</a>
    <p>ID: {{ $pedido->id }}</p>
    <p>Cliente: {{ $pedido->cliente->nombre }}</p>
    <p>Producto: {{ $pedido->producto->nombre }}</p>
    {{-- Mostramos la cantidad a través de la relación con el producto --}}
 
    {{-- Agrega más detalles aquí si los tienes --}}
</div>
@endsection
