<!-- component -->
<div class="w-1/8 flex flex-col overflow-hidden bg-white p-4">
    <br/>
    <a href="{{route('categories.create')}}" class="bg-gray-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">New Category</a><br/>
    <a href="{{route('games.create')}}" class="bg-gray-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">New Game</a><br/>
    <a href="{{route('teams.create')}}" class="bg-gray-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">New Team</a><br/>
    <a href="{{route('teams.create')}}" class="bg-gray-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">New Player</a><br/><br/>
    <a href="{{route('teams.index')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">Search teams</a><br/>
    <a href="{{route('players.index')}}" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded text-center">Search players</a>
</div>
<style>
    ::-webkit-scrollbar {
        width: 15px;
        height: 15px;
    }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(13deg, #7bcfeb 14%, #e685d3 64%);
        border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(13deg, #000 14%, #f9d4ff 64%);
    }
    ::-webkit-scrollbar-track {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: inset 7px 10px 12px #f0f0f0;
    }
    .w-full.flex.mx-auto.px-6.py-8 a {
        display: block;
        margin-bottom: 0.5rem;
    }
</style>