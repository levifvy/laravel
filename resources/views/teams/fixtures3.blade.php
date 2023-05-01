@extends('layouts.plantilla')

@section('title','Team.fixtures3')

@section('content')
    @foreach ($teams as $team)
        @if($team->id == 20)

            {{$team->name}}:
            <form method="POST" action="/teams/{{ $team->id }}" for="fill">
                @csrf
                @method('PUT')

                <div>
                    <label for="goals">Goles:</label>
                    <input type="number" name="goals" value="0">
                    <span>{{ $team->goals }}</span>
                </div>

                <div>
                    <label for="fouls_commited">Faltas cometidas:</label>
                    <input type="number" name="fouls_commited" value="0">
                    <span>{{ $team->fouls_commited }}</span>
                </div>

                <div>
                    <label for="fouls_received">Faltas recibidas:</label>
                    <input type="number" name="fouls_received" value="0">
                    <span>{{ $team->fouls_received }}</span>
                </div>

                <div>
                    <label for="red_cards">Tarjetas rojas:</label>
                    <input type="number" name="red_cards" value="0">
                    <span>{{ $team->red_cards }}</span>
                </div>

                <div>
                    <label for="yellow_cards">Tarjetas amarillas:</label>
                    <input type="number" name="yellow_cards" value="0">
                    <span>{{ $team->yellow_cards }}</span>
                </div>

                <button id="fill" type="submit">Actualizar</button>
            </form>

            @endif
    @endforeach
<br>
@foreach ($teams as $team)
        @if($team->id == 19)

            {{$team->name}}:
            <form method="POST" action="/teams/{{ $team->id }}" for="fill">
                @csrf
                @method('PUT')

                <div>
                    <label for="goals">Goles:</label>
                    <input type="number" name="goals" value="0">
                    <span>{{ $team->goals }}</span>
                </div>

                <div>
                    <label for="fouls_commited">Faltas cometidas:</label>
                    <input type="number" name="fouls_commited" value="0">
                    <span>{{ $team->fouls_commited }}</span>
                </div>

                <div>
                    <label for="fouls_received">Faltas recibidas:</label>
                    <input type="number" name="fouls_received" value="0">
                    <span>{{ $team->fouls_received }}</span>
                </div>

                <div>
                    <label for="red_cards">Tarjetas rojas:</label>
                    <input type="number" name="red_cards" value="0">
                    <span>{{ $team->red_cards }}</span>
                </div>

                <div>
                    <label for="yellow_cards">Tarjetas amarillas:</label>
                    <input type="number" name="yellow_cards" value="0">
                    <span>{{ $team->yellow_cards }}</span>
                </div>

                <button id="fill" type="submit">Actualizar</button>
            </form>

            @endif
    @endforeach

@endsection
