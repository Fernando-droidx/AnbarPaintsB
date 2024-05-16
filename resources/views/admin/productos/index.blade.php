@extends('admin.layoutsAdmin.main')

@section('title', 'Lista de Productos')

@section('content')
<div class="container">
    <h2>Lista de Productos</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>              
                <th scope="col">Precio</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <th scope="row">{{ $producto->id }}</th>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td><img src="{{ asset($producto->image) }}" alt="{{ $producto->nombre }}" style="max-width: 100px;"></td>
                <td>
                    <a href="{{ route('admin.productos.show', $producto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('admin.productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <!-- Agregar botón de eliminar con un formulario de método DELETE -->
                    <form action="{{ route('admin.productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                         @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="btn-group mb-3">
        <a href="{{ route('admin.productos.create') }}" class="btn btn-primary">Crear Producto</a>
    </div>
</div>
@endsection
