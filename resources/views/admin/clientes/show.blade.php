@extends('admin.layoutsAdmin.main')

@section('title', 'Detalles del Cliente')

@section('content')
    <h2>Detalles del Cliente</h2>
    <div>
        <p><strong>ID:</strong> {{ $cliente->id }}</p>
        <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
    </div>
    <a href="{{ route('admin.clientes.index') }}" class="btn btn-secondary">Volver</a>
@endsection