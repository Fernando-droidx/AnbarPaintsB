@extends('layouts.main')

@section('title', 'Nuestros Servicios')

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-4">Nuestros Servicios</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Servicio de Pintura Residencial</h2>
                        <p class="card-text">Ofrecemos servicios profesionales de pintura para casas y apartamentos. Nuestro equipo de expertos se encargará de transformar tus espacios con acabados de alta calidad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Servicio de Pintura Comercial</h2>
                        <p class="card-text">Especializados en proyectos comerciales, desde oficinas hasta locales comerciales. Garantizamos resultados excepcionales que cumplen con los estándares más exigentes de calidad.</p>
                    </div>
                </div>
            </div>
            <!-- Agregar más servicios aquí -->
        </div>
    </div>
@endsection
