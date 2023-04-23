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
        $name =$this->faker->sentence();
        return [
            'name'=> $name,
            'slug'=> Str::slug($name, '-'),
            'description'=> $this->faker->paragraph(),
            'category'=> $this->faker->randomElement(['First division','Second division','Third division'])     
        ];
    }
}
