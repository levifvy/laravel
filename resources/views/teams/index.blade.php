@extends('layouts.plantilla')

@section('title', 'Teams')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent">  
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">List of football teams:</h2>
                        </div>
                        <div class="mt-4 grid space-y-4">
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
      background-image: url({{ asset('/img/cancha6.jpg') }});
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
@endsection
