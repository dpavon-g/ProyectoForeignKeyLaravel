<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedades;
use App\Models\Agentes;
use App\Models\Categorias;
use Illuminate\Support\Facades\DB; // Importa la fachada DB

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = DB::table('propiedades')
                     ->join('agentes', 'propiedades.agent_id', '=', 'agentes.id')
                     ->join('categorias', 'propiedades.category_id', '=', 'categorias.id')
                     ->select('propiedades.*', 'agentes.nombre as agente', 'categorias.nombre as categoria')
                     ->get();

        return view('welcome', ['propiedades' => $propiedades]);
    }


    public function propiedades()
    {
        $propiedades = DB::table('propiedades')
                     ->join('agentes', 'propiedades.agent_id', '=', 'agentes.id')
                     ->join('categorias', 'propiedades.category_id', '=', 'categorias.id')
                     ->select('propiedades.*', 'agentes.nombre as agente', 'categorias.nombre as categoria')
                     ->get();
        $agentes = Agentes::all();
        $categorias = Categorias::all();
        return view('propiedades', ['propiedades' => $propiedades, 'agentes' => $agentes, 'categorias' => $categorias]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Propiedades::create($request->all());
        $propiedades = DB::table('propiedades')
                     ->join('agentes', 'propiedades.agent_id', '=', 'agentes.id')
                     ->join('categorias', 'propiedades.category_id', '=', 'categorias.id')
                     ->select('propiedades.*', 'agentes.nombre as agente', 'categorias.nombre as categoria')
                     ->get();
        $agentes = Agentes::all();
        $categorias = Categorias::all();
        return view('propiedades', ['propiedades' => $propiedades, 'agentes' => $agentes, 'categorias' => $categorias]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
