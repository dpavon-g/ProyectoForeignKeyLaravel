<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadesController;
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
    $propiedades = DB::table('propiedades')
        ->join('agentes', 'propiedades.agent_id', '=', 'agentes.id')
        ->join('categorias', 'propiedades.category_id', '=', 'categorias.id')
        ->select('propiedades.*', 'agentes.nombre as agente', 'categorias.nombre as categoria')
        ->get();

    return view('welcome', ['propiedades' => $propiedades]);
});
