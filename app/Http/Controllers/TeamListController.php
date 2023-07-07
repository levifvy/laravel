<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Category;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TeamListController extends Controller
{
    public function first(){

        $teams = Team::orderBy('id', 'desc')->paginate(50);

        return view('teams.first', compact('teams'));
    }
    public function second(){

        $teams = Team::orderBy('id', 'desc')->paginate(50);

        return view('teams.second', compact('teams'));
    }
    public function third(){

        $teams = Team::orderBy('id', 'desc')->paginate(50);

        return view('teams.third', compact('teams'));
    }
    public function all(){

        $teams = Team::orderBy('id', 'desc')->paginate(50);

        return view('teams.all', compact('teams'));
    }
}
