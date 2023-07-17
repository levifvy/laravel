<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::orderBy('id', 'desc')->paginate(50);
        return view('teams.index', compact('teams'));
    }

    public function create(){
        $categories = Category::all();
        Category::pluck('name', 'id');
        return view('teams.create', compact('categories'));
    }
    
    public function store(StoreTeam $request){
        $validatedData = $request->validated();
        $team = new Team();
        $team->category_id = $validatedData['category_id'];
        $team->name = $validatedData['name'];
        $team->description = $validatedData['description'];
        $team->slug = Str::slug($validatedData['name']);
        $team->save();
        return redirect()->route('teams.show', $team);
        }
    
    public function show(Team $team){
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team){
        $categories = Category::all();
        Category::pluck('name', 'id');
        $teams = Team::all();
        Team::pluck('name', 'id');
        return view('teams.edit', compact('team', 'categories', 'teams'));
    }

    public function update(Request $request, Team $team){
        $team->category_id = $request->category_id;
        $team->name = $request->name;
        $team->description = $request->description;
    
        $team->save();

        return redirect()->route('teams.show', $team);
    }
     
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('teams.index');
    }

    public function storeResults(Request $request)
    {
        $rules = [
            'team_id1' => 'required|exists:teams,id',
            'category_id1' => 'required|exists:categories,id',
            'goals1' => 'integer',
            'fouls_commited1' => 'integer',
            'fouls_received1' => 'integer',
            'red_cards1' => 'integer',
            'yellow_cards1' => 'integer',
            'team_id2' => 'required|exists:teams,id',
            'category_id2' => 'required|exists:categories,id',
            'goals2' => 'integer',
            'fouls_commited2' => 'integer',
            'fouls_received2' => 'integer',
            'red_cards2' => 'integer',
            'yellow_cards2' => 'integer',
        ];

        $validatedData = $request->validate($rules);

        $team1 = Team::find($validatedData['team_id1']);
        $team2 = Team::find($validatedData['team_id2']);

        // Increment team1 stats
        $team1->goals += $validatedData['goals1'];
        $team1->fouls_commited += $validatedData['fouls_commited1'];
        $team1->fouls_received += $validatedData['fouls_received1'];
        $team1->red_cards += $validatedData['red_cards1'];
        $team1->yellow_cards += $validatedData['yellow_cards1'];
        $team1->match_results += $this->calculateMatchResult($validatedData['goals1'], $validatedData['goals2']);
        $team1->score = $this->calculateScore($team1);
        $team1->save();

        // Increment team2 stats
        $team2->goals += $validatedData['goals2'];
        $team2->fouls_commited += $validatedData['fouls_commited2'];
        $team2->fouls_received += $validatedData['fouls_received2'];
        $team2->red_cards += $validatedData['red_cards2'];
        $team2->yellow_cards += $validatedData['yellow_cards2'];
        $team2->match_results += $this->calculateMatchResult($validatedData['goals2'], $validatedData['goals1']);
        $team2->score = $this->calculateScore($team2);
        $team2->save();

        return redirect()->route('results.index')->with('success', 'Results created successfully');
    }

    private function calculateMatchResult($goals1, $goals2)
    {
        if ($goals1 > $goals2) {
            return 1; // Team 1 wins
        } elseif ($goals1 < $goals2) {
            return -1; // Team 2 wins
        } else {
            return 0; // Draw
        }
    }

    private function calculateScore($team)
    {
        return ($team->goals * 5) - ($team->fouls_commited * 2) - ($team->red_cards * 4) - ($team->yellow_cards * 3) + ($team->match_results * 10);
    }

}
