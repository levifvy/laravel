@extends('layouts.plantilla')

@section('title','Teams.fixtures2')

@section('content')

    <form action="{{ route('fixtures4') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="team1_name">Select first team:</label>
            <select name="team1_name" id="team1_name" class="form-control">
                <option value="">Select a team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->name }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="team2_name">Select second team:</label>
            <select name="team2_name" id="team2_name" class="form-control">
                <option value="">Select a team</option>
                @foreach($teams as $team)
                    <option value="{{ $team->name }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Show teams</button>
    </form>
@endsection

