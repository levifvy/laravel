<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Category;
use App\Models\Result;
use App\Http\Requests\Storeteam;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    /**
     * Display a listing of the results.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('score', 'desc')->get();
    
        return view('results.index', compact('teams'));
    }

    
    /**
     * Display the specified result.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->get();
        return view('results.show', compact('result', 'teams', 'categories'));
    }

    /**
     * Show the form for editing the specified result.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        $categories = DB::table('categories')->get();
        $teams = DB::table('teams')->get();
        return view('results.edit', compact('result', 'teams', 'categories'));
    }

    /**
     * Update the specified result in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        // Validation rules for the request data (if needed)
        $rules = [
            'goals' => 'integer',
            'fouls_commited' => 'integer',
            'fouls_received' => 'integer',
            'red_cards' => 'integer',
            'yellow_cards' => 'integer',
            'match_results' => 'integer',
            'score' => 'integer',
        ];

        $validatedData = $request->validate($rules);

        // Update the result using the validated data
        $result->update($validatedData);

        return redirect()->route('results.show')->with('success', 'Results updated successfully');
    }

    
}