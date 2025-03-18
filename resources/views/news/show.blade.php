@extends('layouts.plantilla')

@section('title', $newsItem->title)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <!-- Mostrar la imagen si existe -->
        @if ($newsItem->image_url)
            <img src="{{ $newsItem->image_url }}" alt="{{ $newsItem->title }}" class="w-full h-64 object-cover mb-6 rounded-lg">
        @endif
        <h1 class="text-3xl font-bold mb-4">{{ $newsItem->title }}</h1>
        <div class="text-gray-700 mb-6">
            {!! nl2br(e($newsItem->content)) !!}
        </div>
        <div class="text-sm text-gray-600">
            <span>Source: {{ $newsItem->source }}</span>
            <span class="ml-4">Published on: {{ $newsItem->published_at->format('d/m/Y H:i') }}</span>
        </div>
        <a href="{{ route('news.index') }}" class="mt-6 inline-block text-blue-500 hover:text-blue-700">Back to news</a>
    </div>
</div>
@endsection