@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Liga Futbol de Catalunya</h1>
    <a href="{{route('cursos.create')}}">Crear Equipo</a>
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
