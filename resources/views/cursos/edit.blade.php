@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
    <h1>En esta pagina podras editar un Equipo</h1>

    <form action="{{route('cursos.update', $curso)}}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <input type="hidden" name="slug" value="slug">

        <br>
        <label>
            Descripción:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection