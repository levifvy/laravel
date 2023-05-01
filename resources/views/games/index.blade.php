@extends('layouts.plantilla')

@section('template_title')
    Game
@endsection

@section('content')
    <form method="POST" action="{{ route('games.store') }}">
        @csrf
            <div class="form-group">
                <label for="category">Select category</label>
                <select name="category" class="form-control" onchange="window.location.href = '/games/create/select-teams/' + this.value;">
                    <option value="">Select a category</option>
                    @foreach($teams as $team)
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
            <div class="form-group">
                <label for="start_time">Select start time</label>
                <div class="row">
                    <div class="col-sm-4">
                        <select name="start_year" class="form-control">
                            <option value="">Year</option>
                            @for($year = date('Y'); $year >= date('Y') - 10; $year--)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select name="start_month" class="form-control">
                            <option value="">Month</option>
                            @for($month = 1; $month <= 12; $month++)
                                <option value="{{ $month }}">{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select name="start_day" class="form-control">
                            <option value="">Day</option>
                            @for($day = 1; $day <= 31; $day++)
                                <option value="{{ $day }}">{{ str_pad($day, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select name="start_hour" class="form-control">
                            <option value="">Hour</option>
                            @for($hour = 0; $hour <= 23; $hour++)
                                <option value="{{ $hour }}">{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <select name="start_minute" class="form-control">
                            <option value="">Minute</option>
                            @for($minute = 0; $minute <= 59; $minute++)
                                <option value="{{ $minute }}">{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
        @foreach($games as $game)
        <div class="form-group">
            <label for="winner">Select winner</label>
            <select name="winner" class="form-control">
                <option value="">Select a winner</option>
                <option value="{{ $game->team1_id }}">{{ $game->team1->name }}</option>
                <option value="{{ $game->team2_id }}">{{ $game->team2->name }}</option>
            </select>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Create game</button>
    </form>
@endsection
