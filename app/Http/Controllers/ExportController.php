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
use Chumper\Zipper\Zipper;
class ExportController extends Controller
{
    public function book($id)
    {
        $libro = Libro::find($id);
        $content = $libro->contenido;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp=fopen($archivo_salida,'w');
        fwrite($fp,$content);
        fclose($fp);
        $archivoZip = "test.zip";
        $rutaFinal = "public";
        $files = 'exports/';
        $zipper = new Zipper;
        $zipper->make('test.zip')->add($files);
        if (file_exists($archivoZip)) {
            echo "Proceso Finalizado!! <br/><br/>
                Descargar: <a href='/$archivoZip'>$archivoZip</a>";
        } else {
            echo "Error, archivo zip no ha sido creado!!";
        }
    }
}
