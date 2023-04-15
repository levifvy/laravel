@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
    <h1>On this page, you can register your football team.</h1>

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Team Name:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <input type="hidden" name="slug" value="slug">

        <br>
        <label>
            Description:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Category:<br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Submit form</button>
    </form>
@endsection
