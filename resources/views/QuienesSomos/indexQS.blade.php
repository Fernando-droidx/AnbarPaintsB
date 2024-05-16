@extends('layouts.main')

@section('title', 'Anbar - Quiénes somos')

@section('styles')
<style>
    /* Estilos para las secciones */
    .section {
        background-color: #f8f9fa; /* Color de fondo ligeramente más oscuro */
        border-radius: 15px; /* Redondear los bordes */
        padding: 30px; /* Añadir espacio interno */
        margin-bottom: 30px; /* Espacio inferior entre secciones */
    }
</style>

@section('content')
    <section class="py-5 section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Nuestra Historia</h2>
                    <p>Desde nuestra fundación en el año 2020, en Andrés Barba Paints nos hemos dedicado apasionadamente a embellecer entornos y mejorar espacios...</p>
                </div>
                <div class="col-lg-4">
                    <h2>Nuestros Valores</h2>
                    <ul>
                        <li>Calidad</li>
                        <li>Innovación</li>
                        <li>Compromiso</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Nuestro Equipo</h2>
                    <p>Conoce al equipo apasionado detrás de Andrés Barba Paints, dedicado a ofrecer soluciones integrales en pintura y recubrimientos...</p>
                </div>
                <div class="col-lg-4">
                    <h2>Proyectos Destacados</h2>
                    <ul>
                        <li>Proyecto A</li>
                        <li>Proyecto B</li>
                        <li>Proyecto C</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 section">
        <div class="container">
            <h2>Testimonios de Clientes</h2>
            <div class="row">
                <div class="col-lg-6">
                    <blockquote>
                        <p>"Andrés Barba Paints ha transformado completamente nuestro hogar. Su atención personalizada y calidad en el servicio son incomparables."</p>
                        <footer>- Carlos Rivas</footer>
                    </blockquote>
                </div>
                <div class="col-lg-6">
                    <blockquote>
                        <p>"Gracias a Andrés Barba Paints, nuestra empresa ahora cuenta con un espacio de trabajo moderno y acogedor que refleja nuestra marca."</p>
                        <footer>- El asador de richard</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
