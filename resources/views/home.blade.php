@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<div class=" bg-indigo-50" >
  <div class="">
    <section class="flex flex-col items-center bg-gradient-to-b from-green-300 to-purple-300 min-h-screen body-font text-gray-600 ">
          <h1 class="text-3xl font-bold text-gray-800 py-4">The best Football Teams Manager of Catalonia</h1>
      <div class="container mx-auto px-5 py-10">
        <div class="-m-4 flex flex-wrap">
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a href="{{route('teams.index')}}" class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/football1.jpg" alt="Football"/>
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">Teams</h2>
              <p class="mt-1">List for categories</p>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a href="{{route('fixtures')}}" class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/football2.jpg" alt="Football" />
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">Fixtures</h2>
              <p class="mt-1">01/09/2022</p>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a href="{{route('results')}}" class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/football3.jpg" alt="Football"/>
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">Results</h2>
              <p class="mt-1">01/09/2022</p>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a href="{{route('about')}}" class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/aboutUs.jpg" alt="Football" />
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">About Us</h2>
              <p class="mt-1">01/09/2022</p>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a href="{{route('teams.index')}}" class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/contactUs.jpg" alt="Football"/>
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">Contacts Us</h2>
              <p class="mt-1">01/09/2022</p>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2 lg:w-1/4">
            <a class="relative block h-48 overflow-hidden rounded">
              <img class="block h-full w-full object-cover object-center cursor-pointer" src="/img/joinUs.jpg" alt="Football"/>
            </a>
            <div class="mt-4">
              <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT</h3>
              <h2 class="title-font text-lg font-medium text-gray-900">Join some team</h2>
              <p class="mt-1">You want to play but no have a team</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection
