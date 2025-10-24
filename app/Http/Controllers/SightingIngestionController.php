<?php

namespace App\Http\Controllers;
use App\Services\UnitConversionService;
use App\Http\Requests\StoreSightingRequest;
use App\Models\SurveyDrone;
use Illuminate\Http\Request;

class SightingIngestionController extends Controller
{
    protected $conversionService;

    public function __construct (UnitConversionService $conversionService)
    {
        $this->conversionService = $conversionService;
    }
    public  function __invoke (StoreSightingRequest $request)
    {
        $drone = SurveyDrone::where('serial_number', $request->serial_number)->first();
    }
}
