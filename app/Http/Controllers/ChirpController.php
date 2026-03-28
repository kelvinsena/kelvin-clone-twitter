<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('chirps.index', [
        // Busca os tweets do mais recente para o mais antigo, com o nome do autor
        'chirps' => Chirp::with('user')->latest()->get(),
    ]);
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
    $validated = $request->validate([
        'message' => 'required|string|max:255',
    ]);

    $request->user()->chirps()->create($validated);

    return redirect(route('chirps.index'));
}

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
{
    // Verifica se o tweet é mesmo do usuário logado antes de apagar
    Gate::authorize('delete', $chirp);

    $chirp->delete();

    return redirect(route('chirps.index'));
}
    
}


