@extends('layouts.plantilla')

@section('title','Teams')

@section('content')
    <h1 class="text-3xl text-purple-600 font-bold underline text-center m-2">List of football league teams</h1>
    <a href="{{route('teams.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">>New team</a>
   <br><br>
    <ul class="list-outside list-disc ml-10 border border-gray-300 rounded-md">
        @foreach ($teams as $team)
            <li class="border-b border-gray-300 pl-4 py-2">
                <a href="{{route('teams.show', $team)}}" class="block hover:bg-gray-100">{{$team->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$teams->links()}}

@endsection
