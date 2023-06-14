@extends('layouts.plantilla')

@section('title', 'Team.fixtures3')

@section('content')
<div class="bg-image h-screen">
    <div class="relative py-16 bg-transparent">
        <div class="container mx-auto">
            <div class="grid place-items-center justify-center">
                <div class="col-start-2">
                    <div class="space-y-4 text-center">
                        <h2 class="mb-8 text-3xl text-cyan-300 font-bold">Create Match</h2>
                    </div>
                    <form action="{{ route('fixtures') }}" method="post" onsubmit="return validateCategory()">
                        @csrf
                        <div class="form-group">
                            <div class="grid grid-row-3 gap-4 text-center">
                                <div class="card-body text-center border">
                                    <label for="team1_name"
                                        class="form-control @error('team1') is-invalid @enderror text-white">{{ __('Local Team') }}</label><br>
                                    <select name="team1_name" id="team1_name" class="form-control" required>
                                        <option value="">--------------- Select a team 1 ---------------</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->name }}"
                                            data-category="{{ $team->category }}">{{ $team->name }} -> {{ $team->category }}</option>
                                        @endforeach
                                    </select>
                                    @error('team1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="card-body text-center">
                                    <button
                                        class="row-start-2 row-span-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                        Go to Play
                                    </button>
                                </div>
                                <div class="card-body text-center border">
                                    <label for="team2_name"
                                        class="form-control @error('team2') is-invalid @enderror text-white">{{ __('Visiting Team') }}</label><br>
                                    <select name="team2_name" id="team2_name" class="form-control" required>
                                        <option value="">--------------- Select a team 2 ---------------</option>
                                        @foreach($teams as $team)
                                        <option value="{{ $team->name }}"
                                            data-category="{{ $team->category }}">{{ $team->name }} -> {{ $team->category }}</option>
                                        @endforeach
                                    </select>
                                    @error('team2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
    function validateCategory() {
        var team1Select = document.getElementById('team1_name');
        var team2Select = document.getElementById('team2_name');
        var team1Category = team1Select.options[team1Select.selectedIndex].getAttribute('data-category');
        var team2Category = team2Select.options[team2Select.selectedIndex].getAttribute('data-category');
        if (team1Category !== team2Category) {
            alert("Warning: The selected teams have different categories.");
            return false; // Prevent form submission
        }
        return true; // Allow form submission
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
