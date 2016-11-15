<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;
use Libros;
use App\Http\Requests\LibroRequest;
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
        $libros = Libro::all();
        return view('mostrarB', compact('libros'));

    }
    public function libro($id)
    {
        $libros =Libro::where('id',$id)
        ->get();
        return view('user.libro',compact('libros'));
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
    public function inicioQ()
    {

        return view('inicioQ');

    }
}
