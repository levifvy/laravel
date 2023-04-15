@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
    <h1>On this page you can edit a Team</h1>

    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf

        @method('put')

        <label>
            Team Name:<br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <input type="hidden" name="slug" value="slug">

        <br>
        <label>
            Description:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label>
            Category:<br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <button type="submit">Update this Team</button>
    </form>
@endsection