<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\AgentesController;
use App\Http\Controllers\CategoriasController;
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

Route::get('/', [PropiedadesController::class, 'index'])->name('home');

Route::get('/agentes', [AgentesController::class, 'agentes'])->name('agentes');

Route::post('/crearAgente', [AgentesController::class, 'store'])->name('crearAgente');