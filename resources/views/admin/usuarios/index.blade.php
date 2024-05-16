@extends('admin.layoutsAdmin.main')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="container">
    <h2>Lista de Usuarios</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.usuarios.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('admin.usuarios.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('admin.usuarios.destroy', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
</div>
@endsection
