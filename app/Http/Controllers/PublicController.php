<?php

namespace App\Http\Controllers;

use App\Contenido;
use App\Libro;
use App\Pregunta;
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
//**************++Inicio*********************
    public function index()
    {
        return view('inicio');
    }

    public function inicioB()
    {
        return view('inicioB');

    }

    public function inicioC()
    {
        return view('inicioC');
    }

    public function inicioQ()
    {
        return view('inicioQ');
    }

//***********Libro*************************************

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

//******************Contenido web*********************
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
        $contenidos = Contenido::all();
        return view('mostrarC', compact('contenidos'));
    }

    public function kontenido($id)
    {
        $contenidos = Contenido::where('id',$id)
            ->get();
        return view('user.kontenido',compact('contenidos'));
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

    public function cuestionario($id)
    {
        $cuestionarios = Pregunta::where('id',$id)
            ->get();
        return view('user.cuestionario',compact('cuestionarios'));
    }
/***********DELETE ******************/
    public function deleteBook($id)
    {
        $object =Libro::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }

    public function deleteContent($id)
    {
        $object = Contenido::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }
    public function deleteQuest($id)
    {
        $object = Pregunta::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }

}
