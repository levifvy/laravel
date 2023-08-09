<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerController;
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

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class)->name('home');
    Route::resource('teams', TeamController::class);
    Route::post('teams/results', [TeamController::class, 'storeResults'])->name('teams.storeResults');
    Route::resource('categories', CategoryController::class);
    Route::resource('players', PlayerController::class);
    Route::resource('games', GameController::class);
    Route::resource('results', ResultController::class);
    Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');
    Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');
    Route::get('all', [TeamListController::class,'all'])->name('all');
    
    Route::view('sites','sites')->name('sites');
    Route::view('about','about')->name('about');
    Route::view('rules','rules')->name('rules'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
