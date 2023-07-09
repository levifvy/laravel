@extends('layouts.plantilla')

@section('title', 'Category.edit')

@section('content')
    <div class="container">
        <div class="flex justify-center py-20">
            <div class="col-md-8 font-bold bg-sky-200 p-10 rounded border-collapse">
                <div class="card">
                    <div class="card-header text-center">Edit Category:</div>

                    <div class="card-body p-2">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row p-2">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>

                                <div class="col-md-6 p-2">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $category->name) }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2 text-center">
                                    <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-black bg-gray-200 hover:bg-blue-400 hover:border-red-900 border-b-4 font-black translate-y-2 border-l-4">
                                        Update Category
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
