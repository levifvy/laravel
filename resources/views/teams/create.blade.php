@extends('layouts.plantilla')

@section('title','Teams create')

@section('content')
    <h1>On this page, you can register your football team.</h1>

    <form action="{{route('teams.store')}}" method="POST">

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
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Category:<br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <br>
        <button type="submit">Submit form</button>
    </form>
@endsection
