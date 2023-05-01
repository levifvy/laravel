<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * @property $id
 * @property $team1_id
 * @property $team2_id
 * @property $start_time
 * @property $created_at
 * @property $updated_at
 *
 * @property Team $team
 * @property Team $team
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Game extends Model
{
    
    static $rules = [
		'team1_id' => 'required',
		'team2_id' => 'required',
		'start_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['team1_id','team2_id','start_time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Team', 'id', 'team1_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Team', 'id', 'team2_id');
    }
    

}
