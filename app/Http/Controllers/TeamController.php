<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class TeamController extends Controller
{
    public function index(){

        $teams = Team::orderBy('id', 'desc')->paginate();

        return view('teams.index', compact('teams'));
    }
    
    public function first(){

        $teams = Team::orderBy('id', 'desc')->paginate(25);

        return view('teams.first', compact('teams'));
    }
    public function second(){

        $teams = Team::orderBy('id', 'desc')->paginate(25);

        return view('teams.second', compact('teams'));
    }
    public function third(){

        $teams = Team::orderBy('id', 'desc')->paginate(25);

        return view('teams.third', compact('teams'));
    }
    public function all(){

        $teams = Team::orderBy('id', 'desc')->paginate(25);

        return view('teams.all', compact('teams'));
    }
    public function fixtures(){

        $teams = Team::orderBy('id', 'desc')->paginate();

        return view('teams.fixtures', compact('teams'));
    }
    public function fixtures2(){

        $teams = Team::orderBy('id', 'desc')->paginate();

        return view('teams.fixtures2', compact('teams'));
    }
    public function fixtures3(){

        $teams = Team::orderBy('id', 'desc')->paginate();

        return view('teams.fixtures3', compact('teams'));
    }
    public function resultsMenu(){
        $teams = DB::table('teams')->orderByDesc('score')->get();

        return view('teams.resultsMenu', compact('teams'));
    }
    public function results(){
        $teams = DB::table('teams')->orderByDesc('score')->get();

        //$teams = Team::orderBy('score', 'desc')->paginate(25);

        return view('teams.results', compact('teams'));
    }

    public function results2(){
        $teams = DB::table('teams')->orderByDesc('score')->get();

        return view('teams.results2', compact('teams'));
    }
    public function results3(){
        $teams = DB::table('teams')->orderByDesc('score')->get();

        return view('teams.results3', compact('teams'));
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
            'category' => 'required',
        ]);

        $team->update($request->all());

        return redirect()->route('teams.show', $team);
    }
     
    public function destroy(Team $team){
        $team->delete();

        return redirect()->route('teams.index');
    }

    public function showteamsByScore()
{
    $teams = DB::table('teamsScore')->orderByDesc('score')->get();
    return view('results')->with('teamsScore', $teams);
}

}
