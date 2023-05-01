<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Category;

class Team extends Model
{
    use HasFactory;

    /*protected $fillable = [
        'goals',
        'fouls_commited',
        'fouls_received',
        'red_cards',
        'yellow_cards',
    ];*/
    
     protected $guarded = [];

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
}