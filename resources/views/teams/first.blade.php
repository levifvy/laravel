@extends('layouts.plantilla')

@section('title','Teams first')

@section('content')

<div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
    <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
            <div class="rounded-xl bg-white shadow-xl">
                <div class="p-6 sm:p-16">
                    <div class="space-y-4">
                        <h2 class="mb-8 text-2xl text-cyan-900 font-bold">First division teams</h2>
                    </div>
                    @foreach ($teams->where('category', 'First division') as $team)
                        <div class="mt-1 grid space-y-4">
                            <button class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                <div class="relative flex items-center space-x-4 justify-start">
                                    <a href="{{route('teams.show', $team)}}" class="block hover:bg-gray-100">
                                        <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">{{ $loop->iteration }}. {{$team->name}}</span>
                                    </a>
                                </div>
                            </button>    
                        </div>
                    @endforeach
                    <br>
                </div>
            </div>
            {{$teams->links()}}
        </div>
    </div>
</div>

@endsection