@extends('layouts.plantilla')

@section('title', 'Teams.create')

@section('content')
<div class="relative py-8 bg-gradient-to-br from-cyan-300 to-white">
        <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-20">
            <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-xl bg-white shadow-xl">
                    <div class="p-6 sm:p-8">
                        <div class="space-y-4">
                            <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Register your team:</h2>
                        </div>
                        <form action="{{ route('teams.store') }}" method="POST" class="mx-5 my-5">
                            @csrf
                            <h1 class="text-xl font-semibold mt-5">Category:</h1>
                            <p class="text-black text-sm font-normal flex gap gap-2 pt-2">
                                <div class="relative">
                                    <select class="group h-10 px-6 border-2 border-gray-300 rounded-lg transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100"
                                        name="category_id">
                                       
                                        <option value="" disabled selected>Select one option</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category->id')
                                        <br>
                                        <small>*{{ $message }}</small>
                                        <br>
                                    @enderror
                                </div>
                            </p>
                            <br>
                            <label class="relative block p-3 border-2 border-gray-500 transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 rounded"
                                htmlFor="name">
                                <span class="text-md font-semibold text-zinc-900" htmlFor="name">Team Name</span>
                                <input class="w-full bg-transparent p-0 text-sm  text-gray-500 focus:outline-none" id="name"
                                    type="text" name="name" value="{{ old('name') }}" placeholder="Please fill out this field" />
                                @error('name')
                                    <br>
                                    <small>*{{ $message }}</small>
                                    <br>
                                @enderror
                            </label>

                            <label class="relative block p-3 border-2 mt-5 border-gray-500 transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100 rounded"
                                htmlFor="name">
                                <span class="text-md font-semibold text-zinc-900" htmlFor="name">Description</span>
                                <textarea class="w-full   p-0 text-sm border-none bg-transparent text-gray-500 focus:outline-none" id="name"
                                    type="text" name="description" rows="5" placeholder="Tell us about your team.">{{ old('description') }}</textarea>
                                @error('description')
                                    <br>
                                    <small>*{{ $message }}</small>
                                    <br>
                                @enderror
                            </label>
                            <Button type="submit"
                                class="mt-5 border-2 px-5 py-2 rounded-lg border-gray-500 bg-gray-200 hover:bg-blue-400 hover:border-blue-400 border-b-4 font-black translate-y-2 border-l-4">Submit</Button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

