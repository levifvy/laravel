@extends('layouts.plantilla')

@section('title', 'Category' . $category->name)

@section('content')
    <div class="container p-16">
        <div class="flex justify-center">
            <div class="grid grid-cols-2">
                <div class="w-max bg-gradient-to-r from-blue-200 to-red-200 text-start p-6 rounded">
                    <div class="card-body">
                        <h4 class="mb-8 text-2xl text-cyan-900 font-bold">{{ __('Category Details') }}:</h4>
                        <p><strong>{{ __('Name') }}:</strong> {{ $category->name }}</p>
                        <p><strong>{{ __('ID') }}:</strong> {{ $category->id }}</p>
                        <p><strong>{{ __('Created at') }}:</strong> {{ $category->created_at }}</p>
                        <p><strong>{{ __('Updated at') }}:</strong> {{ $category->updated_at }}</p>
                    </div>
                </div>
                <div class="w-full bg-green-200 p-6">
                    <div class="card-body">
                        <h3 class="mb-8 text-2xl text-cyan-900 font-bold">Teams :</h3>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($category->teams as $team)
                            <a href="{{route('teams.show', $team)}}" class="block hover:bg-gray-100" title="press to see">
                                <div class="mt-1 grid space-y-4">
                                    <button class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                        <div class="relative flex items-center space-x-4 justify-start">
                                            <span class="text-gray-500 font-medium">#{{$counter}}</span>
                                            <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">{{$team->name}}</span>
                                            <div class="relative flex items-center space-x-4 justify-end">
                                                <div class="w-4 ml-auto transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </div>  
                                        </div>
                                    </button>    
                                </div>
                            </a>
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection
