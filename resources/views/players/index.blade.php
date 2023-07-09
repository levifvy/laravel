@extends('layouts.plantilla')

@section('template_title')
    {{ __('index') }} Player
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="p-3 bg-gradient-to-br from-sky-500 to-gray-200 mt-8 mb-16">
            <div class="flex justify-center w-full mx-auto sm:w-2/3 md:w-1/2 lg:w-1/3">
                <div class="bg-transparent p-6">
                    <h1 class="font-bold text-center text-2xl">Players List:</h1>
                    <table class="mt-6 mx-auto border-collapse">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">No.</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">LastName</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">Position</th>
                                <th class="px-4 py-2">NIF</th>
                                <th class="px-4 py-2">Team</th>
                                <th class="px-4 py-2">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $key => $player)
                                <tr>
                                    <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $player->name }}</td>
                                    <td class="border px-4 py-2">{{ $player->last_name }}</td>
                                    <td class="border px-4 py-2">{{ $player->age }}</td>
                                    <td class="border px-4 py-2">{{ $player->position }}</td>
                                    <td class="border px-4 py-2">{{ $player->nif }}</td>
                                    <td class="border px-4 py-2">{{ $player->team->name }}</td>
                                    <td class="border px-4 py-2">{{ $player->team->category->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
