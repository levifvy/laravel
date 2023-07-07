@extends('layouts.plantilla')

@section('title','Sites')

@section('content')
<div class="bg-image h-screen">
  <section class="grid justify-center items-center bg-transparent from-green-300 to-purple-300 min-h-screen body-font text-gray-600">
    <div class="grid grid-cols-3 gap-2">
      <div class="w-full p-4">
        <a href="{{route('teams.index')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/football1.jpg')}}" alt="Football" loading="lazy" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Find your team</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Teams</strong></h2>
          <p class="mt-0 text-xs">By categories</p>
        </div>
      </div>
      <div class="w-full p-4">
        <a href="{{route('games.index')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/football2.jpg')}}" alt="Football" loading="lazy" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Get the best</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Matches</strong></h2>
          <p class="mt-0 text-xs">The best schedule</p>
        </div>
      </div>
      <div class="w-full p-4">
        <a href="{{route('results')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/football3.jpg')}}" alt="Football" width="50" height="50"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Always available</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Results</strong></h2>
          <p class="mt-0 text-xs">All you need</p>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-3 gap-2">
      <div class="w-full p-4">
        <a href="{{route('about')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/aboutUs.jpg')}}" alt="Football" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">Know us</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>About Us</strong></h2>
          <p class="mt-0 text-xs">Our staff</p>
        </div>              
      </div>
      <div class="w-full p-4">
        <a href="{{route('contactUs.index')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/contactUs.jpg')}}" alt="Football" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">We call you</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Contact Us</strong></h2>
          <p class="mt-0 text-xs">Send us your phone</p>
        </div>
      </div>
      <div class="w-full p-4">
        <a href="{{route('contactUs.index')}}" class="relative block h-48 overflow-hidden rounded">
          <img class="block h-full w-full object-cover object-center cursor-pointer" src="{{asset('/img/joinUs.jpg')}}" alt="Football" width="100" height="100"/>
        </a>
        <div class="mt-2">
          <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">You want to play</h3>
          <h2 class="title-font text-lg font-medium text-gray-900"><strong>Join a team</strong></h2>
          <p class="mt-0 text-xs">If you don't have one</p>
        </div>
      </div>
    </div>
  </section>
</div>

<style>
  .bg-image {
    background-image: url({{asset('/img/cesped3.jpg')}});
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
@endsection
