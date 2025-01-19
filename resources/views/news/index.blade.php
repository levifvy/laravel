@extends('layouts.plantilla')

@section('title', 'News')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-teal-600 my-6">Lasts News</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($news as $item)
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-xl font-semibold text-gray-800">
                <a href="{{ route('news.show', $item->id) }}" class="hover:underline">
                    {{ $item->title }}
                </a>
            </h2>
            <p class="text-gray-600 mt-2">{{ Str::limit($item->content, 100) }}</p>
            <p class="text-sm text-gray-500 mt-4">Fuente: {{ $item->source }}</p>
            <p class="text-sm text-gray-500">Published: {{ $item->published_at }}</p>
        </div>
        @empty
        <p class="col-span-3 text-gray-500">There are not news available.</p>
        @endforelse
    </div>
    <div class="mt-6">
        {{ $news->links() }}
    </div>
</div>
@endsection
