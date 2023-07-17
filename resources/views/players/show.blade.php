@extends('layouts.plantilla')

@section('template_title')
    Show Player
@endsection

@section('content')
    <div class="flex justify-center p-2">
        <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/3 pt-6">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-2xl font-bold mb-6">Player:</h1>
                <div>
                    <p><strong>Name:</strong> {{ $player->name }}</p>
                    <p><strong>Last Name:</strong> {{ $player->last_name }}</p>
                    <p><strong>Age:</strong> {{ $player->age }}</p>
                    <p><strong>Position:</strong> {{ $player->position }}</p>
                    <p><strong>NIF:</strong> {{ $player->nif }}</p>
                    <p><strong>Team:</strong> {{ $player->team->name }} (Category: {{ $player->team->category->name }})</p>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        href="{{ route('players.edit', $player->id) }}"
                    >
                        Edit
                    </a>
                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        href="{{ route('players.index') }}"
                    >
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection