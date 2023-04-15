@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Catalan Football League</h1>
    <a href="{{route('cursos.create')}}">New team</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                <br>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
