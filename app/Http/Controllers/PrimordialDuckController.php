<?php

namespace App\Http\Controllers;

use App\Models\PrimordialDuck;
use App\Models\Superpower;
use Illuminate\Http\Request;

class PrimordialDuckController extends Controller
{
    public function index(Request $request){
        $query = PrimordialDuck::query();

        if ($request->has('country')){
            $query->where('last_known_country', 'like', '%'. $request->country. '%');
        }
        if ($request->has('status')){
            $query->where('hibernation_status', 'like', '%'. $request->status. '%');
        }
        return response()->json($query->get());
    }
    public function show(PrimordialDuck $primordialDuck){
        $primordialDuck->load('superpower');
        $primordialDuck->load('duck_sighting_log');
        return response()->json([
            'message' => 'Consultado o Pato Primodrial',
            'PrimodialDuck' => $primordialDuck,
            'superPower' => $primordialDuck->superPower,
            'sighting_log' => $primordialDuck->duck_sighting_log
        ], 200);
    }
}
