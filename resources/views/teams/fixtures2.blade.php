@extends('layouts.plantilla')

@section('title','Teams fixtures2')

@section('content')
    <form method="POST" action="{{ route('games.store') }}">
        @csrf
            <div class="form-group">
                <label for="category">Select category</label>
                <select name="category" class="form-control" onchange="window.location.href = '/games/create/select-teams/' + this.value;">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $team->category }}">{{ $team->category }}</option>
                    @endforeach
                </select>
            </div>
            @if(isset($teams))
                <div class="form-group">
                    <label for="team1">Select first team</label>
                    <select name="team1" class="form-control">
                        <option value="">Select a team</option>
                        @foreach($teams as $id => $name)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="team2">Select second team</label>
                    <select name="team2" class="form-control">
                        <option value="">Select a team</option>
                        @foreach($teams as $id => $name)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
    </form>
@endsection