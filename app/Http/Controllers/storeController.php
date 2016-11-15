<?php

namespace App\Http\Controllers;

use App\User;
use App\Libro;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Input;

class storeController extends Controller
{
    public function libro(Requests\LibroRequest $request)
    {
        Libro::create([
            'contenido' => $request['contenido'],
            ]);
        Session::flash('flash_message','Libro guardado de manera exitosa');
        return Redirect::to('Public/inicioB');

    }
}
