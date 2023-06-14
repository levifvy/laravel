<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;

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
Route::match(['get', 'post'],'fixtures', [TeamController::class,'fixtures'])->name('fixtures');
Route::get('fixtures2', [TeamController::class,'fixtures2'])->name('fixtures2');
Route::get('fixtures3', [TeamController::class,'fixtures3'])->name('fixtures3');
Route::match(['get', 'post'],'fixtures4', [TeamController::class,'fixtures4'])->name('fixtures4');
Route::match(['get', 'post'],'fixtures5', [TeamController::class,'fixtures5'])->name('fixtures5');
Route::match(['get', 'post'],'/teams/fixtures5', [TeamController::class, 'fixtures5'])->name('fixtures5');

Route::get('resultsMenu', [TeamController::class,'resultsMenu'])->name('resultsMenu');
Route::get('results', [TeamController::class,'results'])->name('results');
Route::get('results2', [TeamController::class,'results2'])->name('results2');
Route::get('results3', [TeamController::class,'results3'])->name('results3');


Route::view('about','about')->name('about');
Route::view('rules','rules')->name('rules');

Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');

Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');






