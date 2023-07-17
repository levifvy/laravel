@extends('layouts.plantilla')

@section('template_title')
    {{ __('index') }} Player
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="p-3 bg-transparent mt-8 mb-16">
            <div class="flex justify-center w-full mx-auto sm:w-2/3 md:w-1/2 lg:w-1/3">
                <div class="bg-gradient-to-br from-sky-500 to-gray-200 p-6 px-12">
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
                                <th class="px-4 py-2">Actions</th>
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
                                    <td class="border px-4 py-2">
                                        <div class="flex item-center justify-center space-x-4">
                                            <a href="{{ route('players.show', $player) }}" title="view">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    {{ __('View') }}
                                                </div>
                                            </a>
                                            <a href="{{ route('players.edit', $player) }}" title="edit">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                    {{ __('Edit') }}
                                                </div>
                                            </a>
                                            <form action="{{ route('players.destroy', $player) }}" method="POST" class="d-inline" title="delete">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    {{ __('Delete') }}
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
