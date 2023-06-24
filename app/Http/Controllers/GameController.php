<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB

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
     //
    }
    
    public function show($id)
    {
        $team1 = Team::find($id);
        $teams = Team::all();
        return view('fixtures5', compact('team1', 'teams'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->state = $request->state;
        $team->goals = $request->goals;
        $team->fouls_commited = $request->fouls_commited;
        $team->fouls_received = $request->fouls_received;
        $team->red_cards = $request->red_cards;
        $team->yellow_cards = $request->yellow_cards;
        $team->save();

        return redirect()->back()->with('success', 'Fixture updated successfully!');
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

