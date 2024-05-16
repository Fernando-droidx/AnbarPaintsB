@extends('layouts.main')

@section('title', 'Anbar - Página principal')

@section('content')

    <!-- Sección de productos -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Nuestros productos destacados</h2>
            <div class="row">
                
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="images/producto1.jpg" alt="productos" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">nombre</h5>
                                <p class="card-text"></p>
                                <a href="productos/ver" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container text-center"> <!-- Aplica la clase text-center al contenedor principal -->
            <h2 class="mb-4">Nuestras categorías</h2>
            <div class="row">
                <!-- Categoría Base Agua -->
                <div class="col-lg-3 mb-4 mx-auto"> <!-- Aplica la clase mx-auto a los elementos internos -->
                    <div>
                        <i class="bi bi-droplet" style="font-size: 3rem;"></i>
                        <p class="mt-2">Base Agua</p>
                        <p>Productos amigables con el medio ambiente y de fácil limpieza.</p>
                    </div>
                </div>
                <!-- Categoría Base Solvente -->
                <div class="col-lg-3 mb-4 mx-auto"> <!-- Aplica la clase mx-auto a los elementos internos -->
                    <div>
                        <i class="bi bi-paint-bucket" style="font-size: 3rem;"></i>
                        <p class="mt-2">Base Solvente</p>
                        <p>Productos con solventes, ideales para proyectos industriales y de alta durabilidad.</p>
                    </div>
                </div>
                <!-- Agrega más iconos y descripciones aquí -->
            </div>
        </div>
    </section>

@endsection
