<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    public function book()
    {

        return view('book');

    }

    public function mostrarB()
    {

        return view('mostrarB');

    }

    public function inicioB()
    {

        return view('inicioB');

    }
    public function inicioC()
    {

        return view('inicioC');

    }
    public function editor()
    {

        return view('editor');

    }

    public function contenido()
    {

        return view('contenido');

    }

    public function mostrarC()
    {

        return view('mostrarC');

    }
    public function mostrarQ()
    {

        return view('mostrarQ');

    }

    public function questionario()
    {

        return view('questionario');

    }

}
