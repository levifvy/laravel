@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<div class="relative">
  <!-- Sección principal -->
  <section class="h-[calc(100vh-120px-80px)] flex flex-col justify-center items-center bg-image relative">
    <!-- Imagen de fondo -->
    <div class="absolute top-0 left-0 w-full h-full bg-image -z-10"></div>

    <!-- Contenido principal -->
    <div class="relative z-10 text-center">
      <h1 id="welcome-message" class="text-6xl font-bold mb-4 text-white gradient-text" 
          style="text-shadow: 2px 2px 0px #000;">
        Welcome<br>to<br>Manager Football Teams
      </h1>
    </div>
  </section>
</div>

<style>
  /* Imagen de fondo */
  .bg-image {
    background-image: url({{ asset('/img/balon_fuego.jpeg') }});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  /* Texto con gradiente */
  .gradient-text {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-image: linear-gradient(to right, #87CEFA, #FF00FF);
  }
</style>

<script>
  // Alterna la visibilidad del mensaje de bienvenida
  function toggleMessage() {
    const welcomeMessage = document.getElementById('welcome-message');
    welcomeMessage.classList.toggle('hidden');
  }

  // Activa el efecto intermitente al cargar la página
  document.addEventListener('DOMContentLoaded', function() {
    setInterval(toggleMessage, 500);
  });
</script>
@endsection
