<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agentes;

class AgentesController extends Controller
{

    public function agentes()
    {
        $agentes = Agentes::all();
        return view('agentes', ['agentes' => $agentes]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        Agentes::create($request->all());
        $agentes = Agentes::all();
        return view('agentes', ['agentes' => $agentes]);
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
