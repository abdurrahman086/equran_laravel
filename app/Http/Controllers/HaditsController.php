<?php

namespace App\Http\Controllers;

use App\Models\Hadits;
use Illuminate\Http\Request;

class HaditsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Hadits::all(), 200);
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
        $hadits = Hadits::create($request->all());
        return response()->json($hadits, 201);
    }

    public function show($id)
    {
        $hadits = Hadits::find($id);
        if (is_null($hadits)) {
            return response()->json(['message' => 'Hadits Not Found'], 404);
        }
        return response()->json($hadits, 200);
    }

    public function update(Request $request, $id)
    {
        $hadits = Hadits::find($id);
        if (is_null($hadits)) {
            return response()->json(['message' => 'Hadits Not Found'], 404);
        }
        $hadits->update($request->all());
        return response()->json($hadits, 200);
    }

    public function destroy($id)
    {
        $hadits = Hadits::find($id);
        if (is_null($hadits)) {
            return response()->json(['message' => 'Hadits Not Found'], 404);
        }
        $hadits->delete();
        return response()->json(null, 204);
    }
}

