<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Incluir Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <style>
        .card-img-top {
                max-width: 200px;
                height: auto; /* Cambia el valor según sea necesario */
            }
        a:hover {
                color: blue;
            }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<header>
    <!-- Encabezado -->
    @include('admin.includesAdmin.header')
</header>

<main>
    <!-- Contenido específico de cada página -->
    @yield('content')
</main>

<footer>
   
    @include('admin.includesAdmin.footer')
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
   
</script>

</body>
</html>
