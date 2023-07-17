<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Category;
use App\Models\Player;
use App\Models\Result;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'goals',
        'fouls_commited',
        'fouls_received',
        'red_cards',
        'yellow_cards',
        'match_results',
        'score',
    ];
    
    //  protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    /**
     * Get the results associated with the team.
     */
    public function incrementStats($goals, $foulsCommited, $foulsReceived, $redCards, $yellowCards)
    {
        $this->goals += $goals;
        $this->fouls_commited += $foulsCommited;
        $this->fouls_received += $foulsReceived;
        $this->red_cards += $redCards;
        $this->yellow_cards += $yellowCards;
        $this->match_results = $this->calculateMatchResult();
        $this->score = $this->calculateScore();
        $this->save();
    }

    private function calculateMatchResult()
    {
        $opponentGoals = $this->getOpponentGoals();
        if ($this->goals > $opponentGoals) {
            return 1; // Team wins
        } elseif ($this->goals < $opponentGoals) {
            return -1; // Team loses
        } else {
            return 0; // Draw
        }
    }

    private function calculateScore()
    {
        return ($this->goals * 5) - ($this->fouls_commited * 2) - ($this->red_cards * 4) - ($this->yellow_cards * 3) + ($this->match_results * 10);
    }

    private function getOpponentGoals()
    {
        $game = Game::where('team_id1', $this->id)
                ->orWhere('team_id2', $this->id)
                ->first();

    if ($game) {
        if ($game->team_id1 === $this->id) {
            return $game->team2_goals;
        } else {
            return $game->team1_goals;
        }
    }

    return 0;
    }
    

}