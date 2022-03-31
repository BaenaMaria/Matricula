<?php

use App\Http\Controllers\BecasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConocenosController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MbaController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\TecnicoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/conocenos', ConocenosController::class)->name('conocenos');
Route::get('/metodologia', MetodologiaController::class)->name('metodologia');
Route::get('/admisiones', BecasController::class)->name('becas');
Route::get('/master-asesoria', MasterController::class)->name('master');
Route::get('/mba', MbaController::class)->name('mba');
Route::get('/tecnico-asesoria', TecnicoController::class)->name('tecnico');



// Route::get('/terminos-condiciones', TecnicoController::class);
// Route::get('/politica-privacidad', TecnicoController::class);
// Route::get('/procesamiento-datos', TecnicoController::class);