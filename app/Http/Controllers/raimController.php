<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class raimController extends Controller
{
    public function session_create(Requests $request)
    {
      # code...
      return json_encode('Hola Creador');
    }
    public function session_update(Requests $request)
    {
      # code...
      return json_encode('Hola editor');
    }
    public function session_delete(Requests $request)
    {
      # code...
      return json_encode('Hola eliminador');
    }
}
