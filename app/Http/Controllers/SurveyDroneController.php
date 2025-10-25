<?php

namespace App\Http\Controllers;

use App\Models\SurveyDrone;
use Illuminate\Http\Request;

class SurveyDroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveyDrones = SurveyDrone::all();

        return response()->json([
            'message' => 'Consulta de Todos os Drones',
            'DronesPesquisa' => $surveyDrones
        ], 200);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'serial_number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'manufacturer_id' => 'required'
        ]);
        try {
            $newSurveyDrone = SurveyDrone::create([
                'serial_number' => $request->serial_number,
                'brand' => $request->brand,
                'manufacturer_id' => $request->manufacturer_id
            ]);
            return response()->json([
                'message' => 'Drone Adicionado com Sucesso!',
                'DronePesquisa' => $newSurveyDrone
            ], 201);
        } catch (\Exception $ex) {
            return response()->json([
                'error' => 'Erro ao Adicionar Drone.'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $surveyDrone = SurveyDrone::findOrFail($id);

        return response()->json([
            'message' => 'Consultando Drone',
            'DronePesquisa' => $surveyDrone
        ],200);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SurveyDrone $id)
    {
        $surveyDrone = SurveyDrone::findOrFail($id);

        try {
            $update = $surveyDrone->update([
                'serial_number' => $request->serial_number,
                'brand' => $request->brand,
                'manufacturer_id' => $request->manufacturer_id
            ]);
            return response()->json([
                'message' => 'Drone Atualizado com Sucesso!',
                'DronePesquisa' => $surveyDrone
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                'error' => 'Erro ao Atualizar Drone.'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SurveyDrone $id)
    {
        $surveyDrone = SurveyDrone::findOrFail($id);

        $delete = $surveyDrone->delete();

        if ($delete){
            return response()->json([
                'message' => 'Drone Desvinculado com Sucesso!'
            ], 200);
        }
        else{
            return response()->json([
                'error' => 'Erro Ao Desvincular Drone.'
            ], 404);
        }
    }
}
