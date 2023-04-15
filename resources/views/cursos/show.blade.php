@extends('layouts.plantilla')

@section('title', 'Curso' . $curso->name)

@section('content')
    <h1>Bienvenidos al Equipo de Futbol {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a Equipos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Equipo</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Equipo</button>
    </form>
@endsection