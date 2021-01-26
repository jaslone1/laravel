<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BikeController extends Controller
{
  public function index()
  {
      $bikes = Bike::all()->toArray();
      return array_reverse($bikes);
  }

  public function store(Request $request)
  {
      $bike = new Bike([
          'owner' => $request->input('owner'),
          'email' => $request->input('email'),
          'brand' => $request->input('brand'),
          'model' => $request->input('model'),
          'maintenance' => $request->input('maintenance')
      ]);
      $bike->save();

      return response()->json('Bike created!');
  }
  public function show($id)
  {
      $bike = Bike::find($id);
      return response()->json($bike);
  }

  public function update($id, Request $request)
  {
      $bike = Bike::find($id);
      $bike->update($request->all());

      return response()->json('The bike successfully updated');
  }

  public function destroy($id)
  {
      $bike = Bike::find($id);
      $bike->delete();

      return response()->json('The bike successfully deleted');
  }
}
