@extends('layouts.plantilla')

@section('title', 'Game.create')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent">
        <div class="container mx-auto">
            <div class="grid place-items-center justify-center">
                <div class="col-start-2">
                    <div class="space-y-4 text-center">
                        <h2 class="mb-8 text-3xl text-cyan-300 font-bold">Create Match</h2>
                    </div>
                    <form action="{{ route('games.store') }}" method="post" onsubmit="return validateForm()">
                        @csrf
                        <div class="relative">
                            <label for="category_id" class="form-control @error('category_id') is-invalid @enderror text-white">{{ __('Category:') }}</label><br>
                            <select name="category_id" id="category_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100" required>
                                <option value="" disabled selected>Select one category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div><br>
                        <div class="form-group">
                            <div class="grid grid-row-3 gap-4 text-left">
                                <div class="relative">
                                    <label for="team1_id" class="form-control @error('team1_id') is-invalid @enderror text-white text-left">{{ __('Local Team:') }}</label><br>
                                    <select name="team1_id" id="team1_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100" required>
                                        <option value="" disabled selected>--------------- Select a team 1 ---------------</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}" data-category="{{ $team->category }}">{{ $team->name }} -> {{ $team->category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team1_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label for="team2_id" class="form-control @error('team2_id') is-invalid @enderror text-white">{{ __('Visiting Team:') }}</label><br>
                                    <select name="team2_id" id="team2_id" class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100" required>
                                        <option value="" disabled selected>--------------- Select a team 2 ---------------</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->id }}" data-category="{{ $team->category }}">{{ $team->name }} -> {{ $team->category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team2_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="game_date" class="text-white">Date ('Optional'):</label>
                                    <input type="datetime-local" name="game_date" id="game_date">
                                </div>
                                <div class="card-body text-center">
                                    <button
                                        class="row-start-2 row-span-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var team1Select = document.getElementById('team1_name');
        var team2Select = document.getElementById('team2_name');
        var team1Name = team1Select.value;
        var team2Name = team2Select.value;
        var team1Category = team1Select.options[team1Select.selectedIndex].getAttribute('data-category');
        var team2Category = team2Select.options[team2Select.selectedIndex].getAttribute('data-category');

        if (team1Category !== team2Category) {
            alert("Warning: The selected teams have different categories.");
            return false; // Prevent form submission
        }

        if (team1Name === team2Name) {
            alert("Warning: The selected teams have the same name.");
            return false; 
        }
        return true; 
    }
</script>
<style>
    .bg-image {
        background-image: url({{ asset('/img/cesped10.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection
