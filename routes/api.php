<?php

use App\Http\Controllers\SurveyDroneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/drone', SurveyDroneController::class);
