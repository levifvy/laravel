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
    
    public function all(){

        $teams = Team::all();

        return view('teams.all', compact('teams'));
    }
}
