<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Droguería Hofmann')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>


<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    @include('partials.header')

    <!-- Contenido Principal -->
    <main class="flex-fill">
        <div class="container py-3">
            @yield('content')

        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    
    <!-- Mostrar mensajes flash de éxito -->

    @if(session('success'))
        <div class="alert alert-success m-3">{{ session('success') }}</div>
    @endif

    <!--  Mostrar mensajes flash de error -->

    @if(session('error'))
        <div class="alert alert-danger m-3">{{ session('error') }}</div>
    @endif

</body>
</html>
