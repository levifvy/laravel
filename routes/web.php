<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::resource('teams', TeamController::class);
Route::resource('games', GameController::class);

Route::get('first', [TeamController::class,'first'])->name('first');
Route::get('second', [TeamController::class,'second'])->name('second');
Route::get('third', [TeamController::class,'third'])->name('third');
Route::get('all', [TeamController::class,'all'])->name('all');
Route::get('fixtures', [TeamController::class,'fixtures'])->name('fixtures');
Route::get('fixtures2', [TeamController::class,'fixtures2'])->name('fixtures2');
Route::get('fixtures3', [TeamController::class,'fixtures3'])->name('fixtures3');
Route::get('resultsMenu', [TeamController::class,'resultsMenu'])->name('resultsMenu');
Route::get('results', [TeamController::class,'results'])->name('results');
Route::get('results2', [TeamController::class,'results2'])->name('results2');
Route::get('results3', [TeamController::class,'results3'])->name('results3');

Route::post('/teams/{id}/update-stats', 'TeamController@updateStats')->name('teams.update-stats');


Route::view('about','about')->name('about');

Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');

Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');

Route::get('teamsScore', 'TeamController@showteamsByScore');


Route::get('/games/create/select-category', 'GameController@selectCategory')->name('games.selectCategory');
Route::get('/games/create/select-teams/{category}', 'GameController@selectTeams')->name('games.selectTeams');



