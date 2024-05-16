@extends('admin.layoutsAdmin.main')

@section('title', 'Lista de Direcciones')

@section('content')
<div class="container">
    <h2>Lista de Direcciones</h2>
    <a href="{{ route('admin.domicilios.create') }}" class="btn btn-primary mb-3">Crear Dirección</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Dirección</th>
                <th scope="col">Pedido</th> <!-- Nueva columna -->
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($domicilios as $domicilio)
            <tr>
                <th scope="row">{{ $domicilio->id }}</th>
                <td>{{ $domicilio->direccion }}</td>
                <td>{{ $domicilio->pedido ? $domicilio->pedido->id : 'N/A' }}</td> <!-- Mostrar el ID del pedido o 'N/A' si no hay pedido asociado -->
                <td>
                    <a href="{{ route('admin.domicilios.show', $domicilio->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('admin.domicilios.edit', $domicilio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('admin.domicilios.destroy', $domicilio->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
