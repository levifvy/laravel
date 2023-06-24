@extends('layouts.plantilla')

@section('template_title')
    {{ __('index') }} Player
@endsection

@section('content')
    <h1>Players List</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Position</th>
                <th>NIF</th>
                <th>Category</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->last_name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->nif }}</td>
                    {{-- <td>{{ $player->team->name }}</td> --}}
                    {{-- <td>{{ $player->category->name }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection