<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-purple-600 to-indigo-700 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Categories Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-2xl transform transition-all hover:scale-105">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-4">Categories</h3>
                    <p class="text-4xl font-extrabold text-purple-600">{{ $categoriesCount }}</p>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total registered categories.</p>
                    </div>
                </div>

                <!-- Games Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-2xl transform transition-all hover:scale-105">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-4">Games</h3>
                    <p class="text-4xl font-extrabold text-purple-600">{{ $gamesCount }}</p>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total registered games.</p>
                    </div>
                </div>

                <!-- Players Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-2xl transform transition-all hover:scale-105">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-4">Players</h3>
                    <p class="text-4xl font-extrabold text-purple-600">{{ $playersCount }}</p>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total registered players.</p>
                    </div>
                </div>

                <!-- Teams Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-2xl transform transition-all hover:scale-105">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-4">Teams</h3>
                    <p class="text-4xl font-extrabold text-purple-600">{{ $teamsCount }}</p>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total registered teams.</p>
                    </div>
                </div>

                <!-- Users Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-2xl transform transition-all hover:scale-105">
                    <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-4">Users</h3>
                    <p class="text-4xl font-extrabold text-purple-600">{{ $usersCount }}</p>
                    <div class="mt-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Total registered users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>