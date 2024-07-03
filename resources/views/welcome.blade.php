<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>
<body class="antialiased">
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="container mx-auto p-4">
                <div class="flex justify-between items-center">
                    <a href="/" class="font-semibold text-gray-900 dark:text-white">
                        <!-- Logotipo del hotel -->
                        <img src="{{ asset('images/hotel-logo.jpg') }}" alt="Logo del hotel" class="h-8 w-auto">
                    </a>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Enlaces de navegación -->
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Inicio</a>
                            <a href="room" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Habitaciones</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Servicios</a>
                            <a href="reservations" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Reservas</a>
                            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Contacto</a>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Botón móvil para mostrar el menú -->
                        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-inset focus:ring-red-500" aria-expanded="false">
                            <span class="sr-only">Abrir menú</span>
                            <!-- Icono de barra Hamburguesa -->
                            <svg class="block h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Carrusel de imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="imagen1.jpg" class="block w-full" alt="Imagen 1">
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="imagen2.jpg" class="block w-full" alt="Imagen 2">
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="imagen3.jpg" class="block w-full" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center