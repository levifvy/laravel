<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'category_id',
        'team_id',
        'goals',
        'fouls_commited',
        'fouls_received',
        'red_cards',
        'yellow_cards',
        'match_results',
        'score',
    ];

    /**
     * Get the category associated with the result.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the team associated with the result.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }    
}

