@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    <h1>Catalan Football League</h1>
    <a href="{{route('teams.create')}}">New team</a>
    <ul>
        @foreach ($teams as $team)
            <li>
                <a href="{{route('teams.show', $team)}}">{{$team->name}}</a>
                <br>
            </li>
        @endforeach
    </ul>

    {{$teams->links()}}

@endsection
