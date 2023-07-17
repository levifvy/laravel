@extends('layouts.plantilla')

@section('title', 'Categories create')

@section('content')
    <div class="container mx-auto h-screen flex justify-center py-12">
        <div class="w-3/12">
            <div class="bg-blue-200 p-10 rounded-lg shadow">
                <div class="text-lg font-semibold">{{ __('Create Category') }}</div>

                <div class="mt-4">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf

                        <div class="mb-4 border rounded-lg p-6">
                            <label for="name" class="block font-medium">{{ __('Name:') }}</label>

                            <input id="name" type="text" class="form-input mt-1 block w-full @error('name') border-red-800 @enderror" name="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <span class="text-red-800 font-bold text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
