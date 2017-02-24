<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Http\Requests\LibroRequest;
use App\Http\Requests;

class BookController extends Controller
{
    public function inicioB()
    {
        return view('Libro/inicioB');

    }

    //***********Libro*************************************

    public function crear()
    {
        return view('Libro/crear');
    }

    public function mostrarB()
    {
        $libros = Libro::all();
        return view('Libro/mostrarB', compact('libros'));
    }

    public function libro($id)
    {
        $libros = Libro::where('id',$id)
            ->get();
        return view('user.libro',compact('libros'));
    }

    /***********DELETE ******************/
    public function deleteBook($id)
    {
        $object =Libro::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }



}
