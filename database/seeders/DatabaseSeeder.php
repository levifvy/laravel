<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use App\Models\Category;
use App\Models\Player;
use App\Models\Game;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(5)->create();
        Player::factory(20)->create();
        Game::factory(10)->create();
    }
}
