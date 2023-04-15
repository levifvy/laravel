@extends('layouts.plantilla')

@section('title','Teams edit')

@section('content')
    <h1>On this page you can edit a Team</h1>

    <form action="{{route('teams.update', $team)}}" method="post">

        @csrf

        @method('put')

        <label>
            Team Name:<br>
            <input type="text" name="name" value="{{old('name', $team->name)}}">
        </label>

        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <input type="hidden" name="slug" value="slug">

        <br>
        <label>
            Description:<br>
            <textarea name="description" rows="5">{{old('description', $team->description)}}</textarea>
        </label>

        @error('description')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <label>
            Category:<br>
            <input type="text" name="category" value="{{old('category', $team->category)}}">
        </label>

        @error('category')
            <small>*{{$message}}</small>
        @enderror

        <br>
        <button type="submit">Update this Team</button>
    </form>
@endsection