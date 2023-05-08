<?php

use App\Http\Controllers\ParkingController;
use App\Http\Controllers\StationnementController;
use App\Http\Controllers\TypeTarifController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtlisateurController;
use App\Models\Parking;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('Inscription' ,[UtlisateurController::class ,'store']);
Route::post('AjouterParking' ,[ParkingController::class ,'store']);
Route::post('AjouterTarif' ,[TypeTarifController::class ,'store']);
Route::post('AjouterStationnement' ,[StationnementController::class ,'store']);
Route::post('filtrerparking' ,[ParkingController::class ,'filtrerparking']);

