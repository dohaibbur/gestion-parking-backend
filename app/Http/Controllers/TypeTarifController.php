<?php

namespace App\Http\Controllers;

use App\Models\TypeTarif;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateTypeTarifRequest;

class TypeTarifController extends Controller
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
        $validationData=$request->validate([
            'nomType'=>'required',
        ]);
        $user = new TypeTarif ;
        $user->nomType=$validationData['nomType'];
        $user->save();
        return response()->json(['message'=>'User created successfually'],200);
    }


    /**
     * Display the specified resource.
     */
    public function show(TypeTarif $typeTarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeTarif $typeTarif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeTarifRequest $request, TypeTarif $typeTarif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeTarif $typeTarif)
    {
        //
    }
}
