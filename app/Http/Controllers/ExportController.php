<?php


namespace App\Http\Controllers;

use App\Contenido;
use App\Libro;
use App\Pregunta;
use Illuminate\Http\Request;
//use Libros;
use App\Html;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Chumper\Zipper\Zipper;
use Response;

class ExportController extends Controller
{
    public function book($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $libro = Libro::find($id);
        $content = $libro->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make('objeto.zip') -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."objeto.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"objeto.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function contenido($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $contenido = Contenido::find($id);
        $content = $contenido->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make("objeto.zip") -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."objeto.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"objeto.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }

    public function questionario($id)
    {
        $html = Html::find(1);
        $encabezado = $html -> header;
        $pieP = $html -> footer;

        $pregunta = Pregunta::find($id);
        $content = $pregunta->contenido;

        $archivo = $encabezado.$content.$pieP;
        //Creacion del archivo con el contenido
        $archivo_salida = "exports/index.html";
        $fp = fopen($archivo_salida,'w');
        fwrite($fp,$archivo);
        fclose($fp);

        //$public_dir = '../../www/edutools';
        $public_dir = public_path();
        $files = 'exports/';

        $zipper = new Zipper;
        $zipper -> make("objeto.zip") -> add($files);

        $headers = array(
            'Content-Type' => 'application/octet-stream',
        );

        $filetopath = $public_dir.'/'."objeto.zip";

        if(file_exists($filetopath)){
            return response()->download($filetopath,"objeto.zip",$headers);
        }
        return ['status'=>'file does not exist'];
    }
}
