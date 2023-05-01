@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent"> 
        <div class="flex items-center justify-end h-10">
            <div class="relative">
                <form action="" class="relative mx-auto w-max">
                <input type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-6 w-6 fill-current text-gray-400" viewBox="0 0 24 24">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M15.703 14.297a7.5 7.5 0 1 1 1.414-1.414l5.304 5.303-1.414 1.414-5.304-5.303zm-6.203 0a5 5 0 1 0 10 0 5 5 0 0 0-10 0z"
                    />
                    </svg>
                </div>
            </form>
            </div>
        </div>
    
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">List of football teams</h2>
                        </div>
                        <div class="mt-4 grid space-y-4">
                            <a href="first" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">First category</span>
                            </a>
                            <a href="second" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Second category</span>
                            </a>
                            <a href="third" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Third category</span>
                            </a>
                            <a href="all" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 flex items-center justify-center">
                                <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">All categories</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .bg-image {
      background-image: url({{asset('/img/cancha6.jpg')}});
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
@endsection