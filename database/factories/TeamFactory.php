<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Team::class;

    public function definition(): array
    {
        $name = substr($this->faker->sentence(), 0, 20);
        return [
            'name'=> $name,
            'slug'=> Str::slug($name, '-'),
            'description'=> $this->faker->paragraph(),
            'category'=> $this->faker->randomElement(['First category','Second category','Third category']),

            'goals' => $this->faker->numberBetween(0, 10),
            'score' => $this->faker->numberBetween(0, 100),
            'fouls_commited' => $this->faker->numberBetween(0, 15),
            'fouls_received' => $this->faker->numberBetween(0, 15),
            'red_cards' => $this->faker->numberBetween(0, 15),
            'yellow_cards' => $this->faker->numberBetween(0, 15)
            


        ];
    }
}
