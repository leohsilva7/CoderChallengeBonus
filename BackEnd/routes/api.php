<?php

use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\PrimordialDuckController;
use App\Http\Controllers\SightingLogController;
use App\Http\Controllers\SurveyDroneController;
use App\Http\Controllers\SightingIngestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/manufacturer', ManufacturerController::class);
Route::apiResource('/survey-drones', SurveyDroneController::class);

Route::get('/primordial-ducks', [PrimordialDuckController::class , 'index']);
Route::get('/primordial-ducks/{primordialDuck:designation}', [PrimordialDuckController::class, 'show']);
Route::get('/primordial-ducks/{primordialDuck:designation}/logs', [SightingLogController::class, 'indexForDuck']);
Route::get('/survey-drones/{surveyDrone:serial_number}/logs', [SightingLogController::class, 'indexForDrone']);
Route::get('/sighting-logs', [SightingLogController::class, 'index']);
Route::post('/sightings' , SightingIngestionController::class);
