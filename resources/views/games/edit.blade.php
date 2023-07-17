@extends('layouts.plantilla')

@section('template_title')
    {{ __('Update') }} Game
@endsection

@section('content')
    <section class="flex justify-center py-12 pb-56 h-screen bg-gradient-to-r from-blue-500 to-fuchsia-500">
        <div class="max-w-md w-full mx-4 p-6 bg-white rounded-lg shadow-lg">
           

            <div class="text-center pb-3">
                <h2 class="text-2xl font-bold">{{ __('Update') }} Game</h2>
            </div>

            <form method="POST" action="{{ route('games.update', $game->id) }}" role="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box box-info padding-1">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="p-2">
                                <label for="category_id" class="control-label">Category:</label>
                                <select name="category_id" id="category_id" class="form-control" >
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $game->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="p-2">
                                <label for="team1_id" class="control-label">Team1:</label>
                                <select name="team1_id" id="team1_id" class="form-control @error('team1_id') is-invalid @enderror">
                                    @foreach($teamsByCategory[$game->category_id] as $team)
                                        <option value="{{ $team->id }}" {{ $team->id == $game->team1_id ? 'selected' : '' }}>{{ $team->name }}</option>
                                    @endforeach
                                </select>
                                @error('team1_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="p-2">
                                <label for="team2_id" class="control-label">Team2:</label>
                                <select name="team2_id" id="team2_id" class="form-control @error('team2_id') is-invalid @enderror">
                                    @foreach($teamsByCategory[$game->category_id] as $team)
                                        <option value="{{ $team->id }}" {{ $team->id == $game->team2_id ? 'selected' : '' }}>{{ $team->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('team1_id') && $errors->has('team2_id') && !$errors->has('category_id'))
                                    @if($errors->get('team1_id')[0] === $errors->get('team2_id')[0])
                                        <div class="text-danger">Teams cannot have the same name or ID.</div>
                                    @else
                                        @if($game->team1 && $game->team2 && $game->team1->category_id !== $game->team2->category_id)
                                            <div class="text-danger">Teams belong to different categories.</div>
                                        @endif
                                    @endif
                                @endif
                                @error('team2_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="p-2">
                                <label for="game_date" class="control-label">Game Date:</label>
                                <input type="date" name="game_date" id="game_date" class="form-control @error('game_date') is-invalid @enderror" value="{{ old('game_date', \Carbon\Carbon::parse($game->game_date)->format('Y-m-d')) }}" placeholder="YYYY-MM-DD">
                                @error('game_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </section>
@endsection

