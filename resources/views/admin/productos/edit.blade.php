@extends('admin.layoutsAdmin.main')

@section('title', 'Editar Producto')

@section('content')
<div class="container">
    <h2>Editar Producto</h2>
    <!-- Formulario para editar un producto existente -->
    <form action="{{ route('admin.productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $producto->descripcion }}</textarea>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" step="0.01" required>
    </div>
    <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
</form>

</div>
@endsection

