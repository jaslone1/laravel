<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
      $users = User::all()->toArray();
      return array_reverse($users);
  }

  public function store(Request $request)
  {
      $user = new User([
          'username' => $request->input('username'),
          'email' => $request->input('email'),
          'password' => $request->input('password'),
        ]);
      $user->save();

      return response()->json('User created!');
  }
  public function show($id)
  {
      $user = User::find($id);
      return response()->json($user);
  }

  public function update($id, Request $request)
  {
      $user = User::find($id);
      $user->update($request->all());

      return response()->json('The user successfully updated');
  }

  public function destroy($id)
  {
      $user = User::find($id);
      $user->delete();

      return response()->json('The user successfully deleted');
  }
}
