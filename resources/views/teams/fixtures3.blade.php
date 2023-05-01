@extends('layouts.plantilla')

@section('title','Team.fixtures3')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent"> 
        <div class="grid grid-cols-3 grid-rows-3 h-screen">
            <div></div>
            <div class="relative container col-span-1 row-span-1 bg-gray-200 flex justify-center items-center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Create Fixture') }}</div>
        
                            <div class="card-body">
                                <form method="POST" action="">
                                    @csrf
        
                                    <div class="form-group row">
                                        <label for="team1" class="col-md-4 col-form-label text-md-right">{{ __('Team 1') }}</label>
        
                                        <div class="col-md-6">
                                            <select id="team1" class="form-control @error('team1') is-invalid @enderror" name="team1" required>
                                                <option value="">-- Select Team 1 --</option>
                                                @foreach($teams as $team)
                                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                @endforeach
                                            </select>
        
                                            @error('team1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="team2" class="col-md-4 col-form-label text-md-right">{{ __('Team 2') }}</label>
        
                                        <div class="col-md-6">
                                            <select id="team2" class="form-control @error('team2') is-invalid @enderror" name="team2" required>
                                                <option value="">-- Select Team 2 --</option>
                                                @foreach($teams as $team)
                                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                @endforeach
                                            </select>
        
                                            @error('team2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="start_time" class="col-md-4 col-form-label text-md-right">{{ __('Start Time') }}</label>
        
                                        <div class="col-md-6">
                                            <input id="start_time" type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" required autocomplete="start_time">
        
                                            @error('start_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Create Fixture') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
</div>

<style>
    .bg-image {
      background-image: url({{asset('/img/cesped10.jpg')}});
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
@endsection

