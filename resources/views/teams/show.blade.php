@extends('layouts.plantilla')

@section('title', 'Team' . $team->name)

@section('content')
    <h1>Welcome to the Football Team: {{$team->name}} </h1>
    <a href="{{route('teams.index')}}">Back to Teams</a>
    <br>
    <a href="{{route('teams.edit', $team)}}">Edit Team</a>
    <p><strong>Category: </strong>{{$team->category}}</p>
    <p>{{$team->description}}</p>

    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Team</button>
    </form>
@endsection