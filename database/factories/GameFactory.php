<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;
use App\Models\Team;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    protected $model = Game::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();

        if (!$category) {
            $category = Category::factory()->create();
        }

        $team1 = Team::factory()->create(['category_id' => $category->id]);
        $team2 = Team::factory()->create(['category_id' => $category->id]);

        return [
            'category_id' => $category->id,
            'team1_id' => $team1->id,
            'team2_id' => $team2->id,
            'game_winner' => $this->faker->randomElement([-1, 0, 1, 2]),
            'game_date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
