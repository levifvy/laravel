@extends('layouts.plantilla')

@section('title','Teams fixtures')

@section('content')
<div class="bg-gradient-to-r from-blue-900 to-red-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-3 gap-4">
            <div>
                <div class="text-center">
                    @foreach ($teams as $team)
                        @if($team->id ==  $team1->id)
                            <h2 class="text-5xl font-bold text-white">{{$team->name}}</h2>
                            <form method="POST" action="{{ route('fixtures5', ['id' => $team->id]) }}" class="mt-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" for="matches">
                                @csrf
                                <div class="grid grid-cols-4">
                                    <div class="col-start-1">
                                        <p class="text-gray-700 font-bold text-start">{{$team->category}}</p>
                                    </div>
                                </div>
                                <div class="grid justify-items-end">
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-blue-700 font-bold mb-2" for="state">State:</label>&nbsp
                                        
                                        <select name="state" id="state" required>
                                            <span>
                                                <option class="block text-blue-700 font-bold mb-2" value="">--choose one state--</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="1">Winner</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="-1">Loser</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="0">Draw</option>
                                            </span>
                                        </select>
                                        
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="goals">Goals:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="goals" value="0" min="0">&nbsp
                                        <span>{{ $team->goals }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_commited">Fouls commited:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_commited" value="0" min="0">&nbsp
                                        <span>{{ $team->fouls_commited }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center"> 
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_received">Fouls received:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_received" value="0" min="0">&nbsp
                                        <span>{{ $team->fouls_received }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="red_cards">Red cards 🟥:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="red_cards" value="0" min="0">&nbsp
                                        <span>{{ $team->red_cards }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="yellow_cards">Yellow cards 🟨:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="yellow_cards" value="0" min="0">&nbsp
                                        <span>{{ $team->yellow_cards }}</span>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-20">
                <div class="container text-center">
                    <h1 class="text-white font-bold mb-2">Chronometer</h1>
                    <h2><span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span></h2>
                    <button class="text-white font-bold mb-2" id="start-btn">Start</button>&nbsp&nbsp
                    <button class="text-white font-bold mb-2" id="pause-btn">Pause</button>
                </div>
                <div class="mt-20">
                    <h1 class="text-5xl font-bold text-yellow-500 bg-gradient-to-r from-yellow-500 to-red-500 p-2 rounded-full shadow-lg"><p class="text-8xl text-yellow-200">VS</p></h1>
                </div>
                <div class="text-center">
                    <form action="" onsubmit="return confirm('Are you sure send this forms?')" for="matches">
                        <div class="text-center">
                            <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-green-500 bg-gray-200 hover:bg-blue-400 hover:border-red-900 border-b-4 font-black translate-y-2 border-l-4" id="">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="text-center">
                    @foreach ($teams as $team)
                        @if($team->id == $team2->id)
                            <h2 class="text-5xl font-bold text-white">{{$team->name}}</h2>
                            <form method="POST" action="{{ route('fixtures5', ['id' => $team->id]) }}" class="mt-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" for="matches">
    
                                @csrf
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="col-end-4">
                                        <p class="text-gray-900 font-bold text-end">{{$team->category}}</p>
                                    </div>
                                </div>
                                <div class="grid justify-items-start">
                                    <div class="mb-4 flex justify-center">
                                        <select name="state" id="state" required>
                                            <span>
                                                <option class="block text-blue-700 font-bold mb-2" value="">--choose one state--</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="1">Winner</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="-1">Loser</option>
                                                <option class="block text-blue-700 font-bold mb-2" value="0">Draw</option>
                                            </span>
                                        </select>
                                        
                                        <label class="block text-blue-700 font-bold mb-2" for="state">
                                            &nbsp: State
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->goals }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="goals" value="0" min="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="goals">
                                            &nbsp: Goals
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->fouls_commited }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_commited" value="0" min="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_committed">
                                            &nbsp :Fouls committed
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->fouls_received }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_received" value="0" min="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_received">
                                            &nbsp :Fouls received
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->red_cards }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="red_cards" value="0" min="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="red_cards">
                                            &nbsp :🟥 Red cards 
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->yellow_cards }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="yellow_cards" value="0" min="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="yellow_cards">
                                            &nbsp :🟨 Yellow cards
                                        </label>
                                    </div>
                                </div>
                                
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let seconds = 0;
    let minutes = 0;
    let hours = 0;
    let timerId;

    function updateTime() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }

        document.getElementById('hours').innerHTML = padTime(hours);
        document.getElementById('minutes').innerHTML = padTime(minutes);
        document.getElementById('seconds').innerHTML = padTime(seconds);
    }

    function padTime(time) {
        return (time < 10 ? "0" : "") + time;
    }

    document.getElementById('start-btn').addEventListener('click', function () {
        timerId = setInterval(updateTime, 1000);
    });

    document.getElementById('pause-btn').addEventListener('click', function () {
        clearInterval(timerId);
    });
</script>
<style>
    #cronometro {
      font-size: 3em;
      text-align: center;
    }
    span {
      display: inline-block;
      padding: 0.2em;
      border-radius: 0.2em;
      background-color: #eee;
    }
</style>
@endsection