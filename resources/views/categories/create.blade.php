@extends('layouts.plantilla')

@section('title', 'Categories create')

@section('content')

    <!-- Contenido principal -->
   
        <div class="w-full max-w-md p-6 bg-red rounded-lg shadow">
            <!-- Título centrado -->
            <div class="text-lg font-semibold text-center mb-6">{{ __('Create Category') }}</div>

            <form method="POST" action="{{ route('categories.store') }}">
                @csrf

                <!-- Input centrado -->
                <div class="mb-6">
                    <label for="name" class="block font-medium text-center">{{ __('Name:') }}</label>
                    <input 
                        id="name" 
                        type="text" 
                        class="form-input mt-2 block mx-auto w-10/12 @error('name') border-red-800 @enderror" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autofocus
                    >
                    @error('name')
                        <span class="text-red-800 font-bold text-sm mt-1 text-center block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botón de envío -->
                <div class="flex justify-center">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
