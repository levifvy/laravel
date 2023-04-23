@extends('layouts.plantilla')

@section('title','Teams.all')

@section('content')
    <ul class="list-outside list-disc ml-10 border border-gray-300 rounded-md">
        @foreach ($teams as $team)
            <li class="border-b border-gray-300 pl-4 py-2">
                <a href="{{route('teams.show', $team)}}" class="block hover:bg-gray-100">{{$team->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$teams->links()}}

@endsection