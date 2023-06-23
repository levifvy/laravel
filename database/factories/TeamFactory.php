<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Team;
use Faker\Factory as FakerFactory;
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
    public function definition(): array
    {
        $name = FakerFactory::create()->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'category_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->paragraph(),
            'goals' => $this->faker->numberBetween(0, 10),
            'fouls_commited' => $this->faker->numberBetween(0, 15),
            'fouls_received' => $this->faker->numberBetween(0, 15),
            'red_cards' => $this->faker->numberBetween(0, 15),
            'yellow_cards' => $this->faker->numberBetween(0, 15),
            'score' => $this->faker->numberBetween(0, 100),
        ];
    }
}
