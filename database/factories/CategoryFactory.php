<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->unique()->randomElement(['First category', 'Second category', 'Third category']);

        
        while (Category::where('name', $category)->exists()) {
            $category = $this->faker->unique()->randomElement(['First category', 'Second category', 'Third category']);
        }

        return [
            'name' => $category,
        ];
    }
}
