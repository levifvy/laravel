<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FixtureController extends Controller
{
    public function fixtures(Request $request ){
        $teams = Team::all();
        $team1 = Team::where('name', $request->team1_name)->firstOrFail();
        $team2 = Team::where('name', $request->team2_name)->firstOrFail();
        
        return view('teams.fixtures', compact('team1', 'team2', 'teams'));
    }
    public function fixtures2(){
        $teams = Team::all();

        return view('teams.fixtures2', compact('teams'));
    }
    
    public function fixtures4(Request $request){
        $teams = Team::all();

        $team1 = Team::where('name', $request->team1_name)->firstOrFail();
        $team2 = Team::where('name', $request->team2_name)->firstOrFail();
        
        return view('teams.fixtures4', compact('team1', 'team2', 'teams'));
    }
    public function fixtures5(Request $request, $id)
    {
        // get team to modify
        $team = Team::findOrFail($id);

        // get values submited by forms
        $goals = $request->input('goals');
        $fouls_commited = $request->input('fouls_commited');
        $fouls_received = $request->input('fouls_received');
        $red_cards = $request->input('red_cards');
        $yellow_cards = $request->input('yellow_cards');
        $match_results = $request->input('match_results');

        // update stats from the team
        $team->goals += $goals;
        $team->fouls_commited += $fouls_commited;
        $team->fouls_received += $fouls_received;
        $team->red_cards += $red_cards;
        $team->yellow_cards += $yellow_cards;
        $team->match_results += $match_results;

        // Get the new value of "score" column
        $score = $team->score + ($goals * 5) - ($fouls_commited * 2) - ($red_cards * 4) - ($yellow_cards * 3) + ($match_results * 10);

        // update the "score" column
        $team->score = $score;

        // Save all changes in the database
        $team->save();

        return redirect()->route('teams.fixtures5', ['id' => $id]);
    }
}
