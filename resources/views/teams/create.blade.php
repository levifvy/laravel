@extends('layouts.plantilla')

@section('title','Teams create')

@section('content')
<h1 class="text-3xl text-purple-600 font-bold underline text-left m-2">Register your team</h1>
    {{-- <form action="{{route('teams.store')}}" method="POST" class="w-full max-w-lg">

        @csrf

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">Team Name:</label>
                <br>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-sky-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name" value="{{old('name')}}" placeholder="Please fill out this field">
                @error('name')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
            <br>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">Description:</label>
                <br>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="description" rows="5" placeholder="Tell us about your team.">{{old('description')}}</textarea>
                @error('description')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
            </div>
        </div>
        <br>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">Category:</label>
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="category" value="{{old('category')}}">
                        <option value="" disabled selected>Select one option</option>
                        <option>First division</option>
                        <option>Second division</option>
                        <option>Third division</option>
                        <option>Amateur</option>
                    </select>
                    @error('category')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <br>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form> --}}


<div style="background-color : #f4f4f0" class=" sm:mx-32 lg:mx-32 xl:mx-72 ">
    <div class="flex justify-between container mx-auto">
        <div class="w-full">
            <div class="mt-4 px-4">
                <h1 class="font-thinner flex text-4xl pt-10 px-5">Fill this form:</h1>
                
                    <form action="{{route('teams.store')}}" method="POST" class="mx-5 my-5">

                        @csrf

                        <label class="relative block p-3 border-2 border-black rounded" htmlFor="name">
                            <span class="text-md font-semibold text-zinc-900" htmlFor="name">Team Name</span>
                            <input class="w-full bg-transparent p-0 text-sm  text-gray-500 focus:outline-none" id="name" type="text" name="name" value="{{old('name')}}" placeholder="Please fill out this field" />
                            @error('name')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                            @enderror
                        </label>
                    
                    
                        <label class="relative block p-3 border-2 mt-5 border-black rounded" htmlFor="name">
                            <span class="text-md font-semibold text-zinc-900" htmlFor="name">Description</span>
                            <textarea class="w-full   p-0 text-sm border-none bg-transparent text-gray-500 focus:outline-none" id="name" type="text" name="description" rows="5" placeholder="Tell us about your team.">{{old('description')}}</textarea>
                            @error('description')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                            @enderror
                        </label>
                            
                        
                        <h1 class="text-2xl font-semibold mt-5">Category :</h1>
                        <p class="text-black text-sm font-normal flex gap gap-2 pt-2">
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="category" value="{{old('category')}}">
                                    <option value="" disabled selected>Select one option</option>
                                    <option>First division</option>
                                    <option>Second division</option>
                                    <option>Third division</option>
                                    <option>Amateur</option>
                                </select>
                                @error('category')
                                    <br>
                                    <small>*{{$message}}</small>
                                    <br>
                                @enderror
                            </div>
                        </p>
                        <Button type="submit" class="mt-5 border-2 px-5 py-2 rounded-lg border-black border-b-4 font-black translate-y-2 border-l-4">Submit</Button>
                    </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
