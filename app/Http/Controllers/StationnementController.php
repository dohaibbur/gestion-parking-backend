<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stationnement;

use App\Http\Requests\UpdateStationnementRequest;

class StationnementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index(Request $request)
        {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            
            // Récupérer les dépenses entre les deux dates
            $expenses = Stationnement::whereBetween('dateStat', [$startDate, $endDate])->get();
            
            return response()->json([
                'expenses' => $expenses  ],'stationnment succes');
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
           'dateStat'=>'required',
           'idUtilisateur'=>'required',
           'idPark'=>'required',
           'idType'=>'required',
           'nbUnit'=>'required',
        ]); 
        $user = new Stationnement ;
        $user->dateStat=$validationData['dateStat'];
        $user->idUtilisateur=$validationData['idUtilisateur'];
        $user->idPark=$validationData['idPark'];
        $user->idType=$validationData['idType'];
        $user->nbUnit=$validationData['nbUnit'];
        $user->save();
        return response()->json(['message'=>'User created successfually'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stationnement $stationnement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stationnement $stationnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStationnementRequest $request, Stationnement $stationnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stationnement $stationnement)
    {
        //
    }
}
