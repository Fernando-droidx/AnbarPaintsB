<!-- Vista para mostrar una lista de clientes -->
@extends('admin.layoutsAdmin.main')


@section('title', 'Clientes')

@section('content')
    <h2>Lista de Clientes</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>
                        <a href="{{ route('admin.clientes.show', $cliente->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <!-- Agregar botón de eliminar con un formulario de método DELETE -->
                        <form action="{{ route('admin.clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('admin.clientes.create') }}" class="btn btn-primary mb-3">Crear Cliente</a>
@endsection
