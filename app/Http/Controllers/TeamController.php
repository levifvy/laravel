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
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);

          $categories = Category::all();
            Category::pluck('name', 'id');

        $team = Team::create($request->all());
        return redirect()->route('teams.show', $team, compact('categories'));
    }
    
    public function show(Team $team){
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team){
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team, $id){
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $team = Team::find($id);
        $team->state = $request->state;
        $team->goals = $request->goals;
        $team->fouls_commited = $request->fouls_commited;
        $team->fouls_received = $request->fouls_received;
        $team->red_cards = $request->red_cards;
        $team->yellow_cards = $request->yellow_cards;

        $team->state = $team->state ?? null;
        $team->goals = $team->goals ?? null;
        $team->fouls_commited = $team->fouls_commited ?? null;
        $team->fouls_received = $team->fouls_received ?? null;
        $team->red_cards = $team->red_cards ?? null;
        $team->yellow_cards = $team->yellow_cards ?? null;

        $team->save();

        $team->update($request->all());
        return redirect()->route('teams.show', $team);
    }
     
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('teams.index');
    }

}
