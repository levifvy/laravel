@extends('layouts.plantilla')

@section('title','Teams fixtures')

@section('content')
    <div class="bg-gradient-to-r from-blue-900 to-red-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                    @foreach ($teams as $team)
                        @if($team->id == 20)
                            <h2 class="text-3xl font-bold text-white">{{$team->name}}</h2>
                            <form method="POST" action="{{ route('teams.update', $team )}}" class="mt-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" for="matches">
                                @csrf
                                @method('PUT')
                                <div class="grid justify-items-end">
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="goals">Goals:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="goals" value="0">&nbsp
                                        <span>{{ $team->goals }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_commited">Fouls commited:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_commited" value="0">&nbsp
                                        <span>{{ $team->fouls_commited }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center"> 
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_received">Fouls received:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_received" value="0">&nbsp
                                        <span>{{ $team->fouls_received }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="red_cards">Red cards:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="red_cards" value="0">&nbsp
                                        <span>{{ $team->red_cards }}</span>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <label class="block text-gray-700 font-bold mb-2" for="yellow_cards">Yellow cards:</label>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="yellow_cards" value="0">&nbsp
                                        <span>{{ $team->yellow_cards }}</span>
                                    </div>
                                </div>
                                <form action="" onsubmit="return confirm('Are you sure send this forms?')" for="matches">
                                    <div class="text-end">
                                        <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-green-500 bg-gray-200 hover:bg-blue-800 hover:border-red-900 border-b-4 font-black translate-y-2 border-l-4" id="">Submit</button>
                                    </div>
                                </form>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="text-center mt-20">
                    <div class="mt-20">
                        <h1 class="text-5xl font-bold text-yellow-500 bg-gradient-to-r from-yellow-500 to-red-500 p-2 rounded-full shadow-lg"><p class="text-8xl text-yellow-200">VS</p></h1>
                    </div>
                        
                </div>
                <div class="text-center">
                    @foreach ($teams as $team)
                        @if($team->id == 15)
                            <h2 class="text-3xl font-bold text-white">{{$team->name}}</h2>
                            <form method="POST" action="{{ route('teams.update', $team )}}" class="mt-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" for="matches">

                                @csrf
                                @method('put')
                                <div class="grid justify-items-start">
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->goals }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="goals" value="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="goals">
                                            &nbsp: Goals
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->fouls_commited }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_commited" value="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_committed">
                                            &nbsp :Fouls committed
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->fouls_received }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="fouls_received" value="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="fouls_received">
                                            &nbsp :Fouls received
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->red_cards }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="red_cards" value="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="red_cards">
                                            &nbsp :Red cards
                                        </label>
                                    </div>
                                    <div class="mb-4 flex justify-center">
                                        <span>{{ $team->yellow_cards }}</span>&nbsp
                                        <input class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" name="yellow_cards" value="0">
                                        <label class="block text-gray-700 font-bold mb-2" for="yellow_cards">
                                            &nbsp :Yellow cards
                                        </label>
                                    </div>
                                </div>
                                <form action="/teams/{{ $team->id }}" onsubmit="return confirm('Are you sure send this forms?')" for="matches">
                            
                                    <div class="text-end">
                                        <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-green-500 bg-gray-200 hover:bg-blue-800 hover:border-red-900 border-b-4 font-black translate-y-2 border-l-4" id="matches">Submit</button>
                                    </div>
                                </form>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
