@extends('layouts.plantilla')

@section('title', 'Team' . $team->name)

@section('content')
    <h1 class="text-3xl text-purple-600 font-bold underline text-center m-2">Welcome to the Football Team: {{$team->name}}</h1>
    <a href="{{route('teams.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Back to Teams</a>
    <br><br>
    <a href="{{route('teams.edit', $team)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Edit Team</a>
    <p><strong>Category:</strong>{{$team->category}}</p>
    <p>{{$team->description}}</p>

    <form action="{{route('teams.destroy', $team)}}" method="POST">
        @csrf
        @method('delete')
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">
            Delete Team
        </button>
    </form>
@endsection