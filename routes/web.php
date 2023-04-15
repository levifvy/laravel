<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\TeamController;


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

Route::view('fixtures','fixtures')->name('fixtures');

Route::view('results','results')->name('results');

Route::view('about','about')->name('about');

Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');

Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');