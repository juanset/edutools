<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;

class raimController extends Controller
{
    public function session_create(Requests $request)
    {
      # code...
      return response()->json($request->all());

    }
    public function session_update(Requests $request)
    {
      # code...
      return response()->json($request->all());
    }
    public function session_delete(Requests $request)
    {
      # code...
      return response()->json($request->all());
    }
}
