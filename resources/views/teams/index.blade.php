@extends('layouts.plantilla')

@section('title', 'Teams')

@section('content')
<div class="relative min-h-screen">
    <!-- Imagen de fondo -->
    <div class="bg-image absolute inset-0 bg-cover bg-center z-0"></div>
    
    <!-- Contenido principal -->
    <div class="relative z-10 flex flex-col items-center justify-center min-h-screen">
        <!-- Título centrado -->
        <h1 class="text-4xl text-white font-bold mb-6">Football Teams</h1>
        
        <!-- Pestaña "All Categories" centrada -->
        <a href="all" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">
                All Categories
            </span>
        </a>
    </div>
</div>

<style>
    .bg-image {
        background-image: url({{ asset('/img/cancha6.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed; /* Hace que el fondo permanezca fijo al hacer scroll */
    }
</style>
@endsection
