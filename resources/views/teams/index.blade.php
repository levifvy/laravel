@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    {{-- <h1 class="text-3xl text-purple-600 font-bold underline text-center m-2">List of football league teams</h1>
    
    <ul class="list-outside list-disc ml-10 border border-gray-300 rounded-md">
        @foreach ($teams as $team)
            <li class="border-b border-gray-300 pl-4 py-2">
                <a href="{{route('teams.show', $team)}}" class="block hover:bg-gray-100">{{$team->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$teams->links()}} --}}

    <div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Landing Page Heading<br>Heading Content</h2>
                        </div>
                        <div class="mt-16 grid space-y-4">
                            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <a href="">
                                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Title 1</span>
                                    </a>
                                </div>
                            </button>
                            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <a href="">
                                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Title 2</span>
                                    </a>
                                </div>
                            </button>
                            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <a href="">
                                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Title 3</span>
                                    </a>
                                </div>
                            </button>
                            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                    <a href="">
                                    <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Title 4</span>
                                    </a>
                                </div>
                            </button>
                            <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-center">
                                     
                                    <a href="">
                                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Title 5</span>
                                    </a>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
