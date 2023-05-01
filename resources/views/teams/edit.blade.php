@extends('layouts.plantilla')

@section('title','Teams edit')

@section('content')
    <div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-16">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Modify your team:</h2>
                        </div>
                
                        <form action="{{route('teams.update', $team)}}" method="POST" class="mx-5 my-5">

                            @csrf

                            @method('put')
                                    
                                    <label class="relative block p-3 border-2 border-gray-500 transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 rounded" htmlFor="name">
                                        <span class="text-md font-semibold text-zinc-900" htmlFor="name">Team Name</span>
                                        <input class="w-full bg-transparent p-0 text-sm  text-gray-500 focus:outline-none" id="name" type="text" name="name" value="{{old('name', $team->name)}}" placeholder="Please fill out this field" />
                                        @error('name')
                                            <br>
                                            <small>*{{$message}}</small>
                                            <br>
                                        @enderror
                                    </label>
                                
                                    <input type="hidden" name="goals" value="{{$team->goals}}">
                                    <input type="hidden" name="fouls_commited" value="{{$team->fouls_commited}}">
                                    <input type="hidden" name="fouls_received" value="{{$team->fouls_received}}">
                                    <input type="hidden" name="red_cards" value="{{$team->red_cards}}">
                                    <input type="hidden" name="yellow_cards" value="{{$team->yellow_cards}}">

                                    <label class="relative block p-3 border-2 mt-5 border-gray-500 transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 rounded" htmlFor="name">
                                        <span class="text-md font-semibold text-zinc-900" htmlFor="name">Description</span>
                                        <textarea class="w-full   p-0 text-sm border-none bg-transparent text-gray-500 focus:outline-none" id="name" type="text" name="description" rows="5" placeholder="Tell us about your team.">{{old('description', $team->description)}}</textarea>
                                        @error('description')
                                            <br>
                                            <small>*{{$message}}</small>
                                            <br>
                                        @enderror
                                    </label>
                                        
                                    <h1 class="text-2xl font-semibold mt-5">Category :</h1>
                                    <p class="text-black text-sm font-normal flex gap gap-2 pt-2">
                                        <div class="relative">
                                            <select class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100" type="text" name="category" value="{{old('category', $team->category)}}">
                                                <option value="" disabled selected>Select one option</option>
                                                <option>First Category</option>
                                                <option>Second Category</option>
                                                <option>Third Category</option>
                                            </select>
                                            @error('category')
                                                <br>
                                                <small>*{{$message}}</small>
                                                <br>
                                            @enderror
                                        </div>
                                    </p>
                            <div class="flex justify-center">
                                <div class="w-1/2 flex justify-between">
                                    <a href="{{route('teams.show', $team)}}" class="mt-5 border-2 px-5 py-2 rounded-lg border-gray-500 bg-gray-200 hover:bg-red-400 hover:border-red-400 border-b-4 font-black translate-y-2 border-l-4">Cancel</a>
                                    <button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-gray-500 bg-gray-200 hover:bg-blue-400 hover:border-blue-400 border-b-4 font-black translate-y-2 border-l-4">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection