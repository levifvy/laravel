@extends('layouts.app')

@section('template_title')
    {{ $game->name ?? "{{ __('Show') Game" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Game</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('games.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Team1 Id:</strong>
                            {{ $game->team1_id }}
                        </div>
                        <div class="form-group">
                            <strong>Team2 Id:</strong>
                            {{ $game->team2_id }}
                        </div>
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            {{ $game->start_time }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
