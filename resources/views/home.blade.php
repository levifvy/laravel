@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<div class="bg-image h-screen">
  <section class="grid justify-center items-start bg-transparent from-green-300 to-purple-300 min-h-screen body-font">
    <h1 id="welcome-message" class="text-6xl font-bold mb-4 text-white gradient-text absolute top-50 left-1/2 transform -translate-x-1/2 text-center" style="text-shadow: 2px 2px 0px #000;">Welcome<br>to<br>Manager Football Teams</h1>
  </section>
</div>

<style>
  .bg-image {
    background-image: url({{ asset('/img/balon_fuego.jpeg') }});
    background-repeat: no-repeat;
    background-size: cover;
  }

  .gradient-text {
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    background-image: linear-gradient(to right, #87CEFA, #FF00FF);
  }
</style>

<script>
  
  function toggleMessage() {
    const welcomeMessage = document.getElementById('welcome-message');
    welcomeMessage.classList.toggle('hidden');
  }

  
  document.addEventListener('DOMContentLoaded', function() {
    
    setInterval(toggleMessage, 500);
  });
</script>
@endsection
