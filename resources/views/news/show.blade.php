@extends('layouts.plantilla')

@section('title', 'Show News')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    <small>Font: {{ $news->source }} | Published: {{ $news->published_at }}</small>
    <br>
    <a href="{{ $news->url }}" target="_blank">Reed more to original font</a>
</div>
@endsection





