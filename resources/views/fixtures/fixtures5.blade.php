@extends('layouts.plantilla')

@section('title','Teams.fixtures5')

@section('content')
<div class="bg-image h-screen">
    <div class="flex justify-start p-10">
        <h1>Winner: </h1>
        <div class="text-xl text-white p-2 m-10 border">
            <p>Category ID: {{ $category_id }}</p>
            <p>Goals: {{ $goals }}</p>
            <p>Fouls committed: {{ $fouls_commited }}</p>
            <p>Fouls received: {{ $fouls_received }}</p>
            <p>Red cards: {{ $red_cards }}</p>
            <p>Yellow cards: {{ $yellow_cards }}</p>
        </div>
        
    </div>
    
</div>

<style>
    .bg-image {
        background-image: url({{asset('/img/champions.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection