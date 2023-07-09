@extends('layouts.plantilla')

@section('title','Result.results')

@section('style')
  <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
  @show

@section('content')

<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
<div class="bg-stadium">
  
    <div>
      <div class="flex items-center justify-center min-h-screen bg-transparent bg-opacity-0">
    <div class="col-span-12">
      <div class="overflow-auto lg:overflow-visible ">
        <table class="table text-gray-400 border-separate space-y-6 text-sm">
          <thead class="bg-gray-700 text-white">
            <tr>
              <th class="p-3 text-center">Name</th>
              <th class="p-3 text-left">Category</th>
              <th class="p-3 text-left">Score</th>
              <th class="p-3 text-left">Ranking</th>
              <th class="p-3 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($teams->where('category', 'First category') as $team)
              <tr class="bg-blue-50">
                <td class="p-3">
                  <div class="flex align-items-center">
                    <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                    <div class="ml-3">
                      <div class="p-3 text-gray-700 text-lg"><strong>{{$team->name}}</strong></div>
                      <div class="text-gray-500">Id: {{$team->id}}</div>
                    </div>
                  </div>
                </td>
                <td class="p-3 ">{{$team->category}}</td>
                <td class="p-3 font-bold">{{$team->score}}</td>
                <td class="p-3"><span class="bg-green-400 text-gray-50 rounded-md px-2 uppercase">{{ $loop->iteration }}</span></td>
                <td class="p-3 ">
                  <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                    <i class="material-icons-outlined text-base">G: </i>
                    {{$team->goals}}
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                    <i class="material-icons-outlined text-base">FC:</i>
                    {{$team->fouls_commited}}
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                    <i class="material-icons-outlined text-base">FR:</i>
                    {{$team->fouls_received}}
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                    🟥
                    {{$team->red_cards}}
                  </a>
                  <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                    🟨
                    {{$team->yellow_cards}}
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    </div>
    <div>

    </div>
    <div>

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

