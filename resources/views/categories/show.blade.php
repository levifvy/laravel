@extends('layouts.plantilla')

@section('title', 'Category' . $category->name)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Category Details') }}</div>

            <div class="card-body">
                <p><strong>{{ __('ID') }}:</strong> {{ $category->id }}</p>
                <p><strong>{{ __('Name') }}:</strong> {{ $category->name }}</p>
                <p><strong>{{ __('Created at') }}:</strong> {{ $category->created_at }}</p>
                <p><strong>{{ __('Updated at') }}:</strong> {{ $category->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection
