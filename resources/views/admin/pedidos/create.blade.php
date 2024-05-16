@extends('admin.layoutsAdmin.main')

@section('title', 'Crear Pedido')

@section('content')
    <div class="container">
        <h2>Crear Pedido</h2>

        <form action="{{ route('admin.pedidos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="cliente_id" class="form-label">Cliente</label>
                <select name="cliente_id" id="cliente_id" class="form-select">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="producto_id" class="form-label">Producto</label>
                <select name="producto_id" id="producto_id" class="form-select">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear Pedido</button>
        </form>
    </div>
@endsection
