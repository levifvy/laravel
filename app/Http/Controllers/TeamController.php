<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::orderBy('id', 'desc')->paginate();

        return view('teams.index', compact('teams'));
    }
    public function create(){
        return view('teams.create');
    }
    public function store(StoreTeam $request){

        $request->merge([
            'slug' => Str::slug($request->name),
          ]);

        $team = Team::create($request->all());
        
        return redirect()->route('teams.show', $team);
    }
    public function show(Team $team){
        
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team){
        return view('teams.edit', compact('team'));
    }
    public function update(Request $request, Team $team){

        $request->merge([
            'slug' => Str::slug($request->name),
          ]);
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $team->update($request->all());

        return redirect()->route('teams.show', $team);
    }
    public function destroy(Team $team){
        $team->delete();

        return redirect()->route('teams.index');
    }
}
