<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar with Dropdown Menu</title>
    @vite('resources/css/app.css') <!-- Incluye tu Tailwind CSS -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header>
        <nav class="flex flex-col lg:flex-row items-center justify-between bg-purple-950 p-4 w-full">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="{{ route('sites') }}">
                    <div class="flex items-center">
                        <img class="bg-transparent" src="{{ asset('/img/vs1.jpg') }}" alt="image" loading="lazy" width="50" height="50">
                        <span class="ml-4 font-semibold text-2xl tracking-tight">Manager Football Teams</span>
                    </div>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="w-full lg:flex lg:items-center lg:w-auto ml-2">
                <div class="text-xl lg:flex-grow flex flex-col lg:flex-row justify-center lg:justify-start">
                    <a href="{{route('home')}}"            class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('home') ? 'active':''}}">Home</a>
                    <a href="{{ route('news.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{ request()->routeIs('news.index') ? 'active' : '' }}">News</a>
                    <a href="{{route('rules')}}"           class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('rules') ? 'active':''}}">Rules</a>
                    <a href="{{route('categories.index')}}"     class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('categories.index*') ? 'active':''}}">Teams</a>
                    <a href="{{route('games.index')}}"        class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('games.index*') ? 'active':''}}">Games</a>
                    <a href="{{route('results.index')}}"     class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('resultsMenu') ? 'active':''}}">Results</a>
                    <a href="{{route('about')}}"           class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('about') ? 'active':''}}">About</a>
                    <a href="{{route('contactUs.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 {{request()->routeIs('contactUs.index')? 'active':''}}">Contact</a>
                </div>
            </div>

        <!-- Dropdown Menu -->
        <div class="relative">
            <!-- Botón de menú -->
            <button 
                id="dropdownToggle" 
                class="bg-gray-200 px-4 py-2 rounded focus:outline-none hover:bg-purple-500 hover:text-white transition duration-300"
            >
                Menu
            </button>

            <!-- Menú desplegable -->
            <div 
                id="dropdownMenu" 
                class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 shadow-lg rounded-lg z-50"
            >
                <a href="/login" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-badge mr-2"></i> Login
                </a>
                <a href="/register" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-profile-circle mr-2"></i> Register
                </a>
                <hr>
                <a href="{{ route('categories.create') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> New Category
                </a>
                <a href="{{ route('games.create') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> New Game
                </a>
                <a href="{{ route('teams.create') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> New Team
                </a>
                <a href="{{ route('players.create') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> New Player
                </a>
                <a href="{{ route('teams.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> Teams
                </a>
                <a href="{{ route('players.index') }}" class="block px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                    <i class="ki-outline ki-coffee mr-2"></i> Players
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100 text-gray-700 flex items-center">
                        <i class="ki-outline ki-coffee mr-2"></i> Log Out
                    </button>
                </form>
            </div>
        </div>

        </nav>
    </header>

    <!-- Tooltip -->
    <div class="tooltip hidden rounded-xl shadow-md p-3 bg-gray-700 text-white text-xs" id="tooltip_1">
        Hey, a delightful tooltip is here!
    </div>
    <div class="tooltip hidden rounded-xl shadow-md p-3 bg-gray-700 text-white text-xs" id="tooltip_2">
        Hey, this is a finely polished tooltip example.
    </div>

    <!-- Scripts -->
    <script>
        // Dropdown functionality
        const dropdownToggle = document.getElementById('dropdownToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (event) => {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Tooltips (for demonstration purposes)
        const tooltip1 = document.getElementById('tooltip_1');
        const tooltip2 = document.getElementById('tooltip_2');

        // Example tooltip hover
        document.querySelectorAll('[data-tooltip]').forEach((element) => {
            const tooltipId = element.getAttribute('data-tooltip');
            const tooltip = document.querySelector(tooltipId);

            element.addEventListener('mouseenter', () => {
                tooltip.classList.remove('hidden');
            });

            element.addEventListener('mouseleave', () => {
                tooltip.classList.add('hidden');
            });
        });
    </script>
</body>
</html>