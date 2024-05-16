@extends('admin.layoutsAdmin.main')

@section('title', 'Lista de Pedidos')

@section('content')
<div class="container">
    <h2>Lista de Pedidos</h2>
    
    <table class="table">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Total</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->cliente_id }}</td>
                <td>{{ $pedido->producto_id }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->direccion }}</td>
                <td>
                    <a href="{{ route('admin.pedidos.show', $pedido->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('admin.pedidos.edit', $pedido->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('admin.pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este pedido?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.pedidos.create') }}" class="btn btn-success mb-3">Crear Pedido</a>
</div>
@endsection
