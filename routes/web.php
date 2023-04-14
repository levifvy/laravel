<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Http\Controllers\CursoController;


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

Route::resource('cursos', CursoController::class);

Route::view('partidos','partidos')->name('partidos');

Route::view('clasificatorias','clasificatorias')->name('clasificatorias');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.store');