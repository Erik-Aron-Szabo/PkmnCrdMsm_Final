<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetController extends Controller
{
  public function showSet(Request $request)
  {
    $set_name = $request->path();
    //$set_code = Pokemon::Set()->find($set_name);

    return view('sets')->with('set_name', $set_name);
  }
}
