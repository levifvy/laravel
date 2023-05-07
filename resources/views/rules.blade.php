@extends('layouts.plantilla')

@section('title','rules')

@section('content')
<div class="py-16 bg-white">
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:7/12 lg:w-6/12">
                <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Rules of the game:</h2>
                <p class="mt-6 text-gray-600">— Only can play between teams in the same category.<br><br>
                    — By each goal, get 5 points.<br>
                    — By each foul committed, lose 2 points.<br>
                    — By each red card, lose 4 points.<br>
                    — By each yellow card, lose 3 points.<br>
                    — Whatever kind of fouls will be considered like the yellow card.<br><br>
                    — The team winner gets 10 points.<br>
                    — Team loser loses 10 points.<br>
                    — If the match is a draw, nobody gets points.<br>
                    <br>
                    — You can see the ranking by score by category.</p>
            </div>
            <div class="md:5/12 lg:w-5/12">
                <img src="img/referee.jpg" alt="image" loading="lazy" width="" height="">
            </div>
        </div>
    </div>
</div>
@endsection