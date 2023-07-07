<?php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeamListController;


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
Route::resource('categories', CategoryController::class);
Route::resource('players', PlayerController::class);

Route::view('sites','sites')->name('sites');
Route::view('about','about')->name('about');
Route::view('rules','rules')->name('rules');
Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');
Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');


Route::get('first', [TeamListController::class,'first'])->name('first');
Route::get('second', [TeamListController::class,'second'])->name('second');
Route::get('third', [TeamListController::class,'third'])->name('third');
Route::get('all', [TeamListController::class,'all'])->name('all');

Route::match(['get', 'post'],'fixtures', [FixtureController::class,'fixtures'])->name('fixtures');
Route::get('fixtures2', [FixtureController::class,'fixtures2'])->name('fixtures2');
Route::match(['get', 'post'],'fixtures4', [FixtureController::class,'fixtures4'])->name('fixtures4');
Route::match(['get', 'post'],'fixtures5', [FixtureController::class,'fixtures5'])->name('fixtures5');

Route::get('resultsMenu', [ResultController::class,'resultsMenu'])->name('resultsMenu');
Route::get('results', [ResultController::class,'results'])->name('results');
Route::get('results2', [ResultController::class,'results2'])->name('results2');
Route::get('results3', [ResultController::class,'results3'])->name('results3');



