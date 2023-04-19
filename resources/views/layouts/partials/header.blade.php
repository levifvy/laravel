<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="{{route('home')}}">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <span class="font-semibold text-xl tracking-tight">Catalan Football League</span>
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="{{route('home')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('home') ? 'active':''}}">Home</a>
                    <a href="{{route('teams.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('teams.*') ? 'active':''}}">Teams</a>
                    <a href="{{route('fixtures')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('fixtures') ? 'active':''}}">Fixtures</a>
                    <a href="{{route('results')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('results') ? 'active':''}}">Results</a>
                    <a href="{{route('about')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('about') ? 'active':''}}">About us</a>
                    <a href="{{route('contactUs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('contactUs.index')}}">Contact us</a>
                </div>
            </div>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span>Download</span>
              </button>
        </nav>
    </header>
</body>
</html>