<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFixtureRequest;
use App\Http\Requests\UpdateFixtureRequest;

use Illuminate\Http\Request;
use App\Models\Team;
use Carbon\Carbon;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fixtures = Fixture::all();

        return view('index', ['fixtures'=>$fixtures]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fixtures = Fixture::all();
        return view('create',['teams'=>$fixtures]);
    }

    public function help($name_fixture,$category=null){
        $date = Now();
        return view('show',['nameFixture'=>$name_fixture,
                            'categoryFixture'=>$category,
                            'fecha'=>$date]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFixtureRequest $request)
    {
        $fixture = new Fixture;

        $fixture->team_one_id = $request->team_one_id;
        $fixture->team_two_id = $request->team_two_id;
        $fixture->date = $request->date;

        $fixture->save();

        return redirect('/fixtures')->with('success', 'Fixture created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Fixture $fixture)
    {
        return view('fixtures.show', compact('fixture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fixture $fixture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFixtureRequest $request, Fixture $fixture)
    {
        $teamOne = Team::find($fixture->team_one_id);
        $teamTwo = Team::find($fixture->team_two_id);

        $teamOneScore = $teamOne->score;
        $teamTwoScore = $teamTwo->score;

        if ($request->outcome == 'team_one') {
            $teamOneScore += 10;
            $teamTwoScore -= 10;
            $winningTeam = $teamOne;
        } elseif ($request->outcome == 'team_two') {
            $teamTwoScore += 10;
            $teamOneScore -= 10;
            $winningTeam = $teamTwo;
        } else {
            $winningTeam = null;
        }

        $teamOneGoals = $request->team_one_goals;
        $teamTwoGoals = $request->team_two_goals;

        $teamOneFoulsCommited = $request->team_one_fouls_commited;
        $teamTwoFoulsCommited = $request->team_two_fouls_commited;

        $teamOneFoulsReceived = $request->team_one_fouls_received;
        $teamTwoFoulsReceived = $request->team_two_fouls_received;

        $teamOneRedCards = $request->team_one_red_cards;
        $teamTwoRedCards = $request->team_two_red_cards;

        $teamOneYellowCards = $request->team_one_yellow_cards;
        $teamTwoYellowCards = $request->team_two_yellow_cards;

        $teamOneScore += $teamOneGoals * 3;
        $teamTwoScore += $teamTwoGoals * 3;

        $teamOneScore -= $teamOneFoulsCommited;
        $teamTwoScore -= $teamTwoFoulsCommited;

        $teamOne->fouls_received += $teamOneFoulsReceived;
        $teamTwo->fouls_received += $teamTwoFoulsReceived;

        $teamOneScore -= $teamOneRedCards * 4;
        $teamTwoScore -= $teamTwoRedCards * 4;

        $teamOneScore -= $teamOneYellowCards * 2;
        $teamTwoScore -= $teamTwoYellowCards * 2;

        $teamOne->score = $teamOneScore;
        $teamTwo->score = $teamTwoScore;

        $teamOne->save();
        $teamTwo->save();

        $fixture->team_one_goals = $teamOneGoals;
        $fixture->team_two_goals = $teamTwoGoals;
        $fixture->team_one_fouls_commited = $teamOneFoulsCommited;
        $fixture->team_two_fouls_commited = $teamTwoFoulsCommited;
        $fixture->team_one_fouls_received = $teamOneFoulsReceived;
        $fixture->team_two_fouls_received = $teamTwoFoulsReceived;
        $fixture->team_one_red_cards = $teamOneRedCards;
        $fixture->team_two_red_cards = $teamTwoRedCards;
        $fixture->team_one_yellow_cards = $teamOneYellowCards;
        $fixture->team_two_yellow_cards = $teamTwoYellowCards;
        $fixture->outcome = $request->outcome;
        $fixture->winning_team_id = $winningTeam ? $winningTeam->id : null;
        $fixture->date_played = Carbon::now();
    
        $fixture->save();
    
        return redirect('/fixtures')->with('success', 'Fixture updated successfully.');
    }
    public function destroy(Fixture $fixture)
    {
        $fixture->delete();
    
        return redirect('/fixtures')->with('success', 'Fixture deleted successfully.');
    }
}
