<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Player;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{

    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 40),
            'image' => null,
            'position' => $this->faker->randomElement(['Goalkeeper_(GK)',
            'Center-back_(CB)',
            'Full-back_left_(LB)',
            'Full-back_right_(RB)',
            'Defensive midfielder_(CDM)',
            'Central midfielder_(CM)',
            'Attacking midfielder_(CAM)',
            'Winger_left_(LW)',
            'Winger_right_(RW)',
            'Striker_(ST)',
            'Striker_(CF)']),
            'nif' => $this->faker->unique()->randomNumber(8),
            'team_id' => function () {
                return \App\Models\Team::factory()->create()->id;
            },
        ];
    }
}
