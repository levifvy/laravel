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

    public function getTeamsByCategory(Request $request)
    {
        $categoryId = $request->input('category_id');
        $teams = Team::where('category_id', $categoryId)->get();
        
        return response()->json(['teams' => $teams]);
    }

}
