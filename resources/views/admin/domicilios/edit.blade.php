@extends('admin.layoutsAdmin.main')

@section('title', 'Editar Dirección')

@section('content')
<div class="container">
    <h2>Editar Dirección</h2>
    <form action="{{ route('admin.domicilios.update', $domicilio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $domicilio->direccion }}">
        </div>
        <!-- Aquí puedes agregar más campos para editar -->
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
