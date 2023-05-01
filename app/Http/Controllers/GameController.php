<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        //$games = Game::all();
        $teams = Team::all();

        return view('games.index', compact('teams'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'team1' => 'required|different:team2',
            'team2' => 'required',
            'start_year' => 'required|numeric|min:1900|max:'.(date('Y')+5),
            'start_month' => 'required|numeric|min:1|max:12',
            'start_day' => 'required|numeric|min:1|max:31',
            'start_hour' => 'required|numeric|min:0|max:23',
            'start_minute' => 'required|numeric|min:0|max:59',
        ]);
    
        $game = new Game;
        $game->team1_id = $request->team1;
        $game->team2_id = $request->team2;
        $game->start_time = $validatedData['start_year'].'-'.$validatedData['start_month'].'-'.$validatedData['start_day'].' '.$validatedData['start_hour'].':'.$validatedData['start_minute'].':00';
        $game->save();
    
        return redirect()->route('games.index')->with('success', 'Game created successfully.');
    }
    
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $game->team1_id = $request->input('team1');
        $game->team2_id = $request->input('team2');
        $game->start_time = $request->input('start_time');
        $game->save();

        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index');
    }

    public function selectCategory()
    {
        $categories = ['First category', 'Second category', 'Third category'];
        return view('games.select-category', compact('categories'));
    }

    public function selectTeams($category)
    {
        $teams = Team::where('category', $category)->pluck('name', 'id');
        return view('games.select-teams', compact('teams'));
    }
}
