@extends('layouts.plantilla')

@section('title','resultsMenu')

@section('style')
  <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
@endsection

@section('content')

<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">

<div class="bg-stadium">
  <div class="container">
    <!-- component -->
    <div class="relative py-16 bg-transparent">  
      <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-90">
        <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
          <div class="rounded-xl bg-white shadow-xl">
            <div class="p-6 sm:p-16">
              <div class="space-y-4">
                <h2 class="mb-4 text-2xl text-gray-900 font-bold text-center">Matches results by categories</h2>
              </div>
              <div class="mt-16 grid space-y-4">
                @foreach ($categories as $category)
                  <a href="results" class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                    <div class="relative flex items-center space-x-4 justify-center">  
                      <span class="block w-max font-semibold tracking-wide text-gray-900 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base"><strong>{{ $category->name }}</strong></span>
                    </div>
                  </a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
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

