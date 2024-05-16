@extends('admin.layoutsAdmin.main')

@section('title', 'Detalles del Usuario')

@section('content')
<div class="container">
    <h2>Detalles del Usuario</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $user->name }}</h5>
            <p class="card-text">Correo Electrónico: {{ $user->email }}</p>
        </div>
    </div>
    <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
