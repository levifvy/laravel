@extends('layouts.plantilla')

@section('title', 'Curso' . $curso->name)

@section('content')
    <h1>Welcome to the Football Team: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Back to Teams</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Edit Team</a>
    <p><strong>Category: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Team</button>
    </form>
@endsection