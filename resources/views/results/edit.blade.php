@extends('layouts.plantilla')

@section('template_title')
    {{ __('edit') }} Result
@endsection

@section('content')
    <h1>Edit Result</h1>

    <form action="{{ route('results.update', $result->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $result->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="team_id">Team</label>
            <select name="team_id" id="team_id" class="form-control">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}" {{ $result->team_id == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Rest of the form fields -->

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('results.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
