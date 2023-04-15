@extends('layouts.plantilla')

@section('title','contactanos')

@section('content')
    <h1>Leave us your message</h1>

    <form action="{{route('contactanos.store')}}" method="POST">

        @csrf

        <label for="">
            Name:<br>
            <input type="text" name="name" >
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <br>
        <label for="">
            Email:<br>
            <input type="text" name="email" >
        </label>
        <br>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="">
            Message:<br>
            <textarea name="message" rows="4"></textarea>
        </label>
        <br>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Submit message</button>
    </form>
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection