<?php

namespace App\Http\Controllers;

use App\Contenido;
use App\Pregunta;
use Illuminate\Http\Request;
use Libros;
use App\Libro;
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
//**************++Inicio*********************
    public function index()
    {
        return view('inicio');
    }

    public function inicioQ()
    {
        return view('inicioQ');
    }

//**************Cuestionario********************************+
    public function questionario()
    {
        return view('questionario');
    }

    public function mostrarQ()
    {
        $preguntas = Pregunta::all();
        return view('mostrarQ', compact('preguntas'));
    }

    public function mostrarT()
    {
        $libros = Libro::all();
        $contenidos = Contenido::all();
        $preguntas = Pregunta::all();
        return view('mostrarT', compact('preguntas','contenidos','libros'));
    }

    public function cuestionario($id)
    {
        $cuestionarios = Pregunta::where('id',$id)
            ->get();
        return view('user.cuestionario',compact('cuestionarios'));
    }

    public function deleteQuest($id)
    {
        $object = Pregunta::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }

}
