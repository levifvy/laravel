@extends('layouts.plantilla')

@section('template_title')
    {{ __('delete') }} Result
@endsection

@section('content')
    <h1>Delete Result</h1>

    <p>Are you sure you want to delete this result?</p>

    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <td>{{ $result->id }}</td>
        </tr>
        <tr>
            <th>Category</th>
            <td>{{ $result->category->name }}</td>
        </tr>
        <tr>
            <th>Team</th>
            <td>{{ $result->team->name }}</td>
        </tr>
        <tr>
            <th>Goals</th>
            <td>{{ $result->goals }}</td>
        </tr>
        <tr>
            <th>Fouls Committed</th>
            <td>{{ $result->fouls_commited }}</td>
        </tr>
        <tr>
            <th>Fouls Received</th>
            <td>{{ $result->fouls_received }}</td>
        </tr>
        <tr>
            <th>Red Cards</th>
            <td>{{ $result->red_cards }}</td>
        </tr>
        <tr>
            <th>Yellow Cards</th>
            <td>{{ $result->yellow_cards }}</td>
        </tr>
        <tr>
            <th>Match Results</th>
            <td>{{ $result->match_results }}</td>
        </tr>
        <tr>
            <th>Score</th>
            <td>{{ $result->score }}</td>
        </tr>
    </table>

    <form action="{{ route('results.destroy', $result->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('results.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
