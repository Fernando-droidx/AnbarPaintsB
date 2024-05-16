@extends('layouts.main')

@section('title', 'Galería de Imágenes')

@section('content')
<div class="container">
    <h2>Galería de Imágenes</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/galery/colores.jpg') }}" class="card-img-top" alt="Imagen de muestra 3" style="width: 300px; height: 300px;">
                <div class="card-body">
                    <p class="card-text">Descripción de la imagen 1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/galery/ladrillo.jpg') }}" class="card-img-top" alt="Imagen de muestra 3" style="width: 300px; height: 300px;">
                <div class="card-body">
                    <p class="card-text">Descripción de la imagen 2</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/galery/Barnices.jpg') }}" class="card-img-top" alt="Imagen de muestra 3" style="width: 300px; height: 300px;">
                <div class="card-body">
                    <p class="card-text">Línea de Barnices para madera de secado rápido</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/galery/pared.jpg') }}" class="card-img-top" alt="Imagen de muestra 3" style="width: 300px; height: 300px;">
                <div class="card-body">
                    <p class="card-text">Línea de Barnices para madera de secado rápido</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/galery/pared2.jpg') }}" class="card-img-top" alt="Imagen de muestra 3" style="width: 300px; height: 300px;">
                <div class="card-body">
                    <p class="card-text">Línea de Barnices para madera de secado rápido</p>
                </div>
            </div>
        </div>
   
    </div>
</div>
@endsection
