<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Category;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function resultsMenu(){
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->get();
        
        return view('teams.resultsMenu', compact('teams', 'categories'));
    }
    public function results(){
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->orderByDesc('score')->get();
        
        return view('teams.results', compact('teams'));
    }

    public function results2(){
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->orderByDesc('score')->get();
        
        return view('teams.results2', compact('teams'));
    }

    public function results3(){
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->orderByDesc('score')->get();

        return view('teams.results3', compact('teams'));
    }
}
