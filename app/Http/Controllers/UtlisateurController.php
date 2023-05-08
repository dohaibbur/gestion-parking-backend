<?php

namespace App\Http\Controllers;

use App\Models\Utlisateur;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUtlisateurRequest;

class UtlisateurController extends Controller
{
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
        $validated = $request->validate([
            'nomUtil' => 'required',
            'prenUtil' => 'required',
            'AdresseUtil' => 'required',
            'pass' => 'required',
        ]);

        $user = new Utlisateur;
        $user->nomUtil = $validated['nomUtil'];
        $user->prenUtil = $validated['prenUtil'];
        $user->AdresseUtil = $validated['AdresseUtil'];
        $user->pass = bcrypt($validated['pass']);
        $user->save();
        return response()->json(['message'=>'User creatde successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Utlisateur $utlisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utlisateur $utlisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUtlisateurRequest $request, Utlisateur $utlisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utlisateur $utlisateur)
    {
        //
    }
}
