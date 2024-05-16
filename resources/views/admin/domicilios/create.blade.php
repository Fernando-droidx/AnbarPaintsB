@extends('admin.layoutsAdmin.main')

@section('title', 'Crear Dirección')

@section('content')
<div class="container">
    <h2>Crear Dirección</h2>
    <form action="{{ route('admin.domicilios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
