<?php


namespace App\Http\Controllers;

use App\Contenido;
use App\Libro;
use App\Pregunta;
use Illuminate\Http\Request;
use Libros;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;
use Response;

class ExportController extends Controller
{
    public function book($id)
    {
        $libro = Libro::find($id);
        $content = $libro->contenido;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$content);
        fclose($fp);

        $archivoZip = "test.zip";
        $public_dir=public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make('test.zip') -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath=$public_dir.'/'.$archivoZip;

        if(file_exists($filetopath)){
            return response()->download($filetopath,$archivoZip,$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function contenido($id)
    {
        $contenido = Contenido::find($id);
        $content = $contenido->contenido;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$content);
        fclose($fp);

        $archivoZip = "objeto.zip";
        $public_dir=public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make($archivoZip) -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath=$public_dir.'/'.$archivoZip;

        if(file_exists($filetopath)){
            return response()->download($filetopath,$archivoZip,$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function questionario($id)
    {
        $pregunta = Pregunta::find($id);
        $content = $pregunta->contenido;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$content);
        fclose($fp);

        $archivoZip = "objeto.zip";
        $public_dir=public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make($archivoZip) -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath=$public_dir.'/'.$archivoZip;

        if(file_exists($filetopath)){
            return response()->download($filetopath,$archivoZip,$headers);
        }
        return ['status'=>'file does not exist'];
    }
}
