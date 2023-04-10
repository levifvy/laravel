<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Models\User;
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

Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);
