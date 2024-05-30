<?php

namespace App\Http\Controllers;

use App\Models\RealEstate;
use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    public function index()
    {
        return RealEstate::all();
        $realestate = RealEstate::all();
        return response()->json($realestate);
    }

    public function store(Request $request)
    {
        $realestate = RealEstate::create($request->all());
        return response()->json($realestate, 201);
    }

    public function show(RealEstate $realestate)
    {
        return $realestate;
    }

    public function update(Request $request, RealEstate $realestate)
    {
        $realestate->update($request->all());
        return response()->json($realestate, 200);
    }

    public function destroy(RealEstate $realestate)
    {
        $realestate->delete();
        return response()->json(null, 204);
    }
}
