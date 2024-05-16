@extends('admin.layoutsAdmin.main')

@section('title', 'Administrativos de Anbar Paints')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        ¡Bienvenido al panel de administración!
                        <!-- En tu vista -->
                        <form action="{{ route('logout') }}" method="POST" class="mb-4">
                            @csrf
                            <button type="submit" class="btn btn-danger  ">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
