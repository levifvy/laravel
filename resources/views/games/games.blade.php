@extends('layouts.app')

@section('title', 'games')

@section('content')
    <div class="container">
        <h1>Create a New Game</h1>
        <form method="POST" action="{{ route('games.store') }}">
            @csrf
            <div class="form-group">
                <label for="team1_id">Team 1:</label>
                <select name="team1_id" id="team1_id" class="form-control">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="team2_id">Team 2:</label>
                <select name="team2_id" id="team2_id" class="form-control">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="datetime-local" name="start_time" id="start_time" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Game</button>
        </form>
    </div>
@endsection
