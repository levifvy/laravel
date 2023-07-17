<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $teams = Team::all();
        $games = Game::all();
        return view('games.create', compact('categories', 'teams', 'games'));
       
    }

    /**
     * Store a newly created game in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
             'category_id' => 'required',
             'team1_id' => 'required',
             'team2_id' => 'required',
         ]);
     
         $game = new Game();
         $game->category_id = $request->category_id;
         $game->team1_id = $request->team1_id;
         $game->team2_id = $request->team2_id;
     
         if ($request->filled('game_date')) {
             $game->game_date = $request->game_date;
         }
     
         $game->save();
     
         return redirect()->route('games.index')->with('success', 'Game created successfully.');
     }
     

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
         $categories = Category::all();
         $teams = Team::all();
        return view('games.show', compact('game', 'categories', 'teams'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $categories = Category::all();
        $teams = Team::all();

        $teamsByCategory = Team::all()->groupBy('category_id');

        
        return view('games.edit', compact('game', 'categories', 'teams', 'teamsByCategory'));

    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        // Validate the request data
        $request->validate([
            'category_id' => 'required',
            'team1_id' => 'required',
            'team2_id' => 'required',
            'game_date' => 'required|date',
        ]);

        // Update the game instance
        $game->category_id = $request->category_id;
        $game->team1_id = $request->team1_id;
        $game->team2_id = $request->team2_id;
        $game->game_date = $request->game_date;
        $game->save();

        return redirect()->route('games.index')->with('success', 'Game updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}


