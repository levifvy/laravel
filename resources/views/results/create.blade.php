@extends('layouts.plantilla')

@section('template_title')
    {{ __('Create') }} Result
@endsection

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Create Result</h1>
            </div>
            <div class="card-body bg-green-400">
                <form action="{{ route('results.store') }}" method="POST">
                    @csrf
                    <div class="flex row-auto d-flex justify-center">
                        <div class="form-group w-5/12">
                            <div class="p-6 border-b">
                                <div class="bg-blue-500 border p-6">
                                    <div class="">
                                        <label for="category_id">Category:</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="" disabled selected>Choose a category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="">
                                        <label for="team_id">Team:</label>
                                        <select name="team_id" id="team_id" class="form-control">
                                            <option value="" disabled selected>Choose a Team</option>
                                            @foreach ($teams as $team)
                                                <option value="{{ $team->id }}">{{ $team->name }} -> {{ $team->category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="">
                                        <label for="goals">Goals:</label>
                                        <input type="number" name="goals" id="goals" class="form-control" value="0" min="0">
                                    </div>
                
                                    <div class="">
                                        <label for="fouls_commited">Fouls Committed:</label>
                                        <input type="number" name="fouls_commited" id="fouls_commited" class="form-control" value="0" min="0">
                                    </div>
                
                                    <div class="">
                                        <label for="fouls_received">Fouls Received:</label>
                                        <input type="number" name="fouls_received" id="fouls_received" class="form-control" value="0" min="0">
                                    </div>
                
                                    <div class="">
                                        <label for="red_cards">Red Cards:</label>
                                        <input type="number" name="red_cards" id="red_cards" class="form-control" value="0" min="0">
                                    </div>
                
                                    <div class="">
                                        <label for="yellow_cards">Yellow Cards:</label>
                                        <input type="number" name="yellow_cards" id="yellow_cards" class="form-control" value="0" min="0">
                                    </div>
                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="form-group d-flex justify-content-between">
                            <button id="submitBtn" class="btn btn-primary" name="submitBtn" value="create">Create</button>
                            <a href="{{ route('results.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
