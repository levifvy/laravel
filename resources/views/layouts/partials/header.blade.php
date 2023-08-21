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
                <a href="{{route('sites')}}">
                    <div class="flex items-center">
                        <img class="bg-transparent" src="{{asset('/img/vs1.jpg')}}" alt="image" loading="lazy" width="50" height="50">
                        {{--<svg class="h-10 w-10 text-slate-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" />    <path d="M12 12a8 8 0 0 0 8 4M7.5 13.5a12 12 0 0 0 8.5 6.5" />    <path d="M12 12a8 8 0 0 0 8 4M7.5 13.5a12 12 0 0 0 8.5 6.5" transform="rotate(120 12 12)" />    <path d="M12 12a8 8 0 0 0 8 4M7.5 13.5a12 12 0 0 0 8.5 6.5" transform="rotate(240 12 12)" /></svg> --}}
                        <span class="ml-4 font-semibold text-2xl tracking-tight">Manager Football Teams</span>
                    </div>
                </a>
            </div>
            
            
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-xl lg:flex-grow flex justify-center">
                    <a href="{{route('home')}}"            class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('home') ? 'active':''}}">Home</a>
                    <a href="{{route('rules')}}"           class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('rules') ? 'active':''}}">Rules</a>
                    <a href="{{route('categories.index')}}"     class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('categories.index*') ? 'active':''}}">Teams</a>
                    <a href="{{route('games.index')}}"        class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('games.index*') ? 'active':''}}">Games</a>
                    <a href="{{route('results.index')}}"     class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('resultsMenu') ? 'active':''}}">Results</a>
                    <a href="{{route('about')}}"           class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('about') ? 'active':''}}">About</a>
                    <a href="{{route('contactUs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('contactUs.index')? 'active':''}}">Contact</a>
                </div>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-xl lg:flex-grow flex justify-end">
                    <nav>      
                        <a href="/register" class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">REGISTER</a>

                        <a href="/login" class="inline-block rounded border-2 border-neutral-50 px-6 pt-2 pb-[6px] text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">LOGIN</a>          
                    </nav>
                </div>
            </div>
        </nav>
    </header>
</body>
</html>