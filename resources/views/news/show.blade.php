@extends('layouts.plantilla')

@section('title', 'Show News')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    <small>Fuente: {{ $news->source }} | Publicado: {{ $news->published_at }}</small>
    <br>
    <a href="{{ $news->url }}" target="_blank">Leer más en la fuente original</a>
</div>
@endsection




@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-teal-600 my-6">{{ $newsItem->title }}</h1>
    <p class="text-gray-600 mt-4">{{ $newsItem->content }}</p>
    <p class="text-sm text-gray-500 mt-6">Fuente: {{ $newsItem->source }}</p>
    <p class="text-sm text-gray-500">Publicado: {{ $newsItem->published_at }}</p>
    <a href="{{ $newsItem->url }}" class="text-teal-500 hover:underline mt-4 block">Leer más</a>
    <br>
    <a href="{{ $news->url }}" target="_blank">Leer más en la fuente original</a>
</div>
@endsection
