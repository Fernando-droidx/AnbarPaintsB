@extends('admin.layoutsAdmin.main')

@section('title', 'Editar Cliente')

@section('content')
    <h2>Editar Cliente</h2>
    <form action="{{ route('admin.clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="password">Nueva Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
