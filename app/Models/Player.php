<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Category;
use App\Models\Team;
class Player extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'team_id', 'id');
    }

    public function games()
    {
        return $this->belongsTo(Game::class);
    }
}
