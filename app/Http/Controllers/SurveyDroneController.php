<?php

namespace App\Http\Controllers;

use App\Models\Survey_Drone;
use Illuminate\Http\Request;

class SurveyDroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drone = Survey_Drone::all();

        return response()->json([
            "message" =>"Todos os Drone",
            'drone' => $drone
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey_Drone $survey_Drone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey_Drone $survey_Drone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey_Drone $survey_Drone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey_Drone $survey_Drone)
    {
        //
    }
}
