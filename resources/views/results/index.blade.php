@extends('layouts.plantilla')

@section('template_title')
    {{ __('index') }} Result
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')
<link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    rel="stylesheet">
    <div class="bg-gradient-to-r from-blue-200 to-pink-200">
    <div class="container mx-auto pt-4">
        <div class="overflow-x-auto">
            <table class="table text-gray-400 border-separate space-y-6 text-sm mx-auto">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="p-3 text-center">Nº</th>
                        <th class="p-3 text-center">Team</th>
                        <th class="p-3 text-left border-x">Score</th>
                        <th class="p-3 text-center">Results</th>
                        <th class="p-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr class="bg-blue-50 hover:bg-blue-200">
                            <td class="p-3"><span class="bg-green-400 text-gray-50 rounded-md px-2 uppercase">{{ $loop->iteration }}</span></td>
                            <td class="p-3">
                                <div class="flex items-center">
                                    <img class="rounded-full h-12 w-12 object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="p-3 text-gray-700 text-lg"><strong>{{ $team->name }}</strong></div>
                                        <div class="text-gray-500">Category: {{ $team->category->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3 font-bold text-black border">{{ $team->score }}</td>
                            <td class="px-3">
                                <div class="text-gray-400" title="Goals">
                                    G: {{ $team->goals }}
                                </div>
                                <div class="text-gray-400" title="Fouls Commited">
                                    FC: {{ $team->fouls_commited }}
                                </div>
                                <div class="text-gray-400" title="Fouls Received">
                                    FR: {{ $team->fouls_received }}
                                </div>
                                <div class="text-gray-400" title="Red cards">
                                    🟥
                                    {{ $team->red_cards }}
                                </div>
                                <div class="text-gray-400" title="Red yellow">
                                    🟨
                                    {{ $team->yellow_cards }}
                                </div>
                            </td>
                            <td class="p-6">
                                <a href="{{ route('teams.show', $team) }}" class="btn btn-primary py-3" title="View">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        {{-- {{ __('View') }} --}}
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .bg-stadium {
        background-image: url({{asset('/img/cesped.jpg')}});
        background-size: cover;
    }

    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }

    .table tr {
        border-radius: 20px;
    }

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>
@endsection


