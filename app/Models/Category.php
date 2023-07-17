<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Game;
use App\Models\Result;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['name'];
    protected $guarded = [];
    
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    /**
     * Get the results associated with the category.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
