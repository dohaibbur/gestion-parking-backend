<?php

namespace App\Http\Controllers;

use App\Models\Parking;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateParkingRequest;

class ParkingController extends Controller
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
        $validationData = $request -> validate([
            'nomPark'=>'required',
            'ville'=>'required',
            'nbPlace'=>'required',
            'nbPlaceLibre'=>'required',
            
        ]);
        $user=new Parking ;
        $user->nomPark=$validationData['nomPark'];
        $user->ville=$validationData['ville'];
        $user->nbPlace=$validationData['nbPlace'];
        $user->nbPlaceLibre=$validationData['nbPlaceLibre'];
        $user->save();
        return response()->json(['message'=>'Parking creatde successfully'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parking $parking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parking $parking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParkingRequest $request, Parking $parking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parking $parking)
    {
        //
    }
    public function filtrerparking(Request $request)
    {
        $validatedData = $request->validate([
            'prix' => 'required',
        ]);
        $prix = $validatedData['prix'];

        $parkings = DB::table('parkings')
        ->join('tarif_parkings', 'parkings.idPark', '=', 'tarif_parkings.idPark')
        ->where('tarif_parkings.prix', '<=', $prix)
        ->where('parkings.nbPlaceLibre', '>', 0)
        ->get();
        return response()->json($parkings);
    }
}
