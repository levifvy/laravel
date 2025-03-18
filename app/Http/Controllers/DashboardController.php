<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Game;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los conteos de cada modelo
        $categoriesCount = Category::count();
        $gamesCount = Game::count();
        $playersCount = Player::count();
        $teamsCount = Team::count();
        $usersCount = User::count();

        // Pasar los datos a la vista
        return view('dashboard', compact(
            'categoriesCount',
            'gamesCount',
            'playersCount',
            'teamsCount',
            'usersCount'
        ));
    }
}