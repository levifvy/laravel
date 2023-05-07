@extends('layouts.plantilla')

@section('title','Team.fixtures3')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent">
        <div class="container mx-auto">
            <div class="grid place-items-center justify-center">
                <div class="col-start-2">
                    <div class="space-y-4 text-center">
                        <h2 class="mb-8 text-3xl text-cyan-300 font-bold">Create Match</h2>
                    </div>
                    <form action="{{ route('fixtures') }}" method="post">
                        @csrf
                        <div class="form-group" >
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="card-body text-center border">
                                    <label for="team1_name" class="form-control @error('team1') is-invalid @enderror text-white">{{ __('Team 1') }}</label><br>
                                    <select name="team1_name" id="team1_name" class="form-control" required>
                                        <option value="">-- Select a team1 --</option>
                                        @foreach($teams as $team)
                                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                        @error('team1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="">
                                    
                                            <p class="text-white">{{ $team->category }}</p>
                                                
                                        </div>
                                </div>
                                <div class="card-body text-center">
                                    <button class="row-start-2 row-span-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                        Start
                                    </button>
                                </div>
                                <div class="card-body text-center border">
                                    <label for="team2_name" class="form-control @error('team2') is-invalid @enderror text-white">{{ __('Team 2') }}</label><br>
                                    <select name="team2_name" id="team2_name" class="form-control" required>
                                            <option value="">-- Select a team --</option>
                                        @foreach($teams as $team)
                                            <option value="{{ $team->name }}">{{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                        @error('team2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="">
                                            <p class="text-white">{{ $team->category }}</p>  
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
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