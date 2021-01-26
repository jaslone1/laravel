<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RideController extends Controller
{
    public function index()
    {
        $rides = Ride::all()->toArray();
        return array_reverse($rides);
    }

    public function store(Request $request)
    {
        $ride = new Ride([
            'leader' => $request->input('leader'),
            'type' => $request->input('type'),
            'departure_time' => $request->input('departure_time'),
            'departure_location' => $request->input('departure_location'),
            'miles' => $request->input('miles'),
            'intensity' => $request->input('intensity'),
            'notes' => $request->input('notes')

        ]);
        $ride->save();

        return response()->json('Ride created!');
    }
    public function show($id)
    {
        $ride = Ride::find($id);
        return response()->json($ride);
    }

    public function update($id, Request $request)
    {
        $ride = Ride::find($id);
        $ride->update($request->all());

        return response()->json('The ride successfully updated');
    }

    public function destroy($id)
    {
        $ride = Ride::find($id);
        $ride->delete();

        return response()->json('The ride successfully deleted');
    }
}
