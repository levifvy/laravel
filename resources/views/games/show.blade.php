@extends('layouts.plantilla')

@section('title', 'Game' . 'show')

@section('content')
    <div class="container">
        <h1>Game Details</h1>
        <div>
            <strong>Category:</strong>
            {{ $game->category->name }}
        </div>
        <div>
            <strong>Team 1:</strong>
            {{ $game->team1->name }} ({{ $game->team1->category->name }})
        </div>
        <div>
            <strong>Team 2:</strong>
            {{ $game->team2->name }} ({{ $game->team2->category->name }})
        </div>
        <div>
            <strong>Winner:</strong>
            @if($game->game_winner == '-1')
                Draw
            @elseif($game->game_winner == '0')
                No winners
            @elseif($game->game_winner == '1')
                Team 1
            @elseif($game->game_winner == '2')
                Team 2
            @endif
        </div>
        <div>
            <strong>Date:</strong>
            {{ $game->game_date }}
        </div>
    </div>
@endsection