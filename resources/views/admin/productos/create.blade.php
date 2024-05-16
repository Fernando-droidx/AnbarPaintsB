@extends('admin.layoutsAdmin.main')

@section('title', 'Crear Producto')

@section('content')
<div class="container">
    <h2>Crear Producto</h2>
    <!-- Formulario para crear un nuevo producto -->
    <form action="{{ route('admin.productos.store') }}" method="POST"  enctype="multipart/form-data">>
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen:</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</div>
@endsection
