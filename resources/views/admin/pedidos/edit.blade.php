@extends('admin.layoutsAdmin.main')

@section('title', 'Editar Pedido')

@section('content')
<div class="container">
    <h2>Editar Pedido</h2>
    <form action="{{ route('admin.pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" id="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $pedido->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="producto_id">Producto:</label>
            <select name="producto_id" id="producto_id" class="form-control">
                @foreach($productos as $producto)
                <option value="{{ $producto->id }}" {{ $pedido->producto_id == $producto->id ? 'selected' : '' }}>
                    {{ $producto->nombre }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="domicilio_id">Domicilio:</label>
            <select name="domicilio_id" id="domicilio_id" class="form-control">
                @foreach($domicilios as $domicilio)
                <option value="{{ $domicilio->id }}" {{ $pedido->domicilio_id == $domicilio->id ? 'selected' : '' }}>
                    {{ $domicilio->direccion }}
                </option>
                @endforeach
            </select>
        </div>
        <!-- Agregar campo para la cantidad -->
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $pedido->cantidad }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
