@extends('layouts.plantilla')

@section('title', 'Football News')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Latest Football News</h1>
    <div class="grid gap-6">
        @foreach ($news as $item)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <!-- Mostrar la imagen si existe -->
                @if ($item->image_url)
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-48 object-cover mb-4 rounded-lg">
                @endif
                <h2 class="text-xl font-semibold mb-2">{{ $item->title }}</h2>
                <p class="text-gray-700 mb-4">{{ Str::limit($item->content, 200) }}</p>
                <a href="{{ route('news.show', $item->id) }}" class="text-blue-500 hover:text-blue-700">Read more...</a>
                <div class="mt-4 text-sm text-gray-600">
                    <span>Source: {{ $item->source }}</span>
                    <span class="ml-4">Published on: {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d/m/Y H:i') : 'Date not available' }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $news->links() }}
    </div>
</div>
@endsection