@extends('template.main')
@section('icon')
    <a class="navbar-brand" href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools1.png') }}" width="auto" height="89px" alt="Logo Q" title="Logo Q">
    </a>
@endsection
@section('title','Recursos')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Recursos</title>
    <style>a{color:#dd4f24}.cuerpo{background: #222d32;color:#444;font-family:tahoma;font-size:16px}  footer{background: #d8e0e2;color:#a6b4cd;text-align:center;height:150px;width:100%;}  .logo{border-right: 1px solid #dd4f24; border-radius: 2px;float: left; width: 50px;}  footer h3{font-size:14px;font-weight:normal;}  footer h3 strong{display:block}  footer h3 .mejor:before,footer h3 .mejor:after{content:" - "}  header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,0.2);color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}  header .titular{margin:0 65px 0 70px;}  header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}  nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}  nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}  nav .menu li{display:inline-block;}  nav .menu li:hover{background:#dd4f24}  nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}  .principal{padding:.5em;}  .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
</head>

<body class="cuerpo">
<section class="principal">
    <div class="options">
        <h3>Tus libros</h3>
        <h4 class="page-header">Estos son los libros que has creado:</h4>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Libro</th>
                <th>Ver</th>
                <th>Exportar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{$libro->id}}</td>
                    <td>Libro{{$libro->id}}</td>
                    <td><a href="{{route("Public.libro",$libro->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                    <td>
                        <a href="{{route("Public.exportBook",$libro->id)}}"><i class=" glyphicon glyphicon-export"></i></a>
                    </td>
                    <td>
                        {!!Form::open(['route'=>['Public.deleteBook', $libro->id],'method'=>'delete'])!!}
                        <button type="submit" title="Eliminar">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="options">
        <h3>Tus Contenidos Web</h3>
        <h4 class="page-header">Estos son los Contenidos que has creado: </h4>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Contenido</th>
                <th>Ver</th>
                <th>Exportar</th>
                <td>Eliminar</td>
            </tr>
            </thead>
            <tbody>
            @foreach($contenidos as $contenido)
                <tr>
                    <td>{{$contenido->id}}</td>
                    <td>Contenido{{$contenido->id}}</td>
                    <td><a href="{{route("Public.kontenido",$contenido->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                    <td>
                        <a href="{{route("Public.exportContent",$contenido->id)}}"><i class=" glyphicon glyphicon-export"></i></a>
                    </td>
                    <td>
                        {!!Form::open(['route'=>['Public.deleteContent', $contenido->id],'method'=>'delete'])!!}
                        <button type="submit" title="Eliminar">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <div class="options">
        <h3>Tus Questionarios</h3>
        <h4 class="page-header">Estos son los Cuestionarios que has creado:</h4>

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Cuestionario</th>
                <th>Ver</th>
                <th>Exportar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($preguntas as $questionario)
                <tr>
                    <td>{{$questionario->id}}</td>
                    <td>Question{{$questionario->id}}</td>
                    <td><a href="{{route("Public.cuestionario",$questionario->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a></td>
                    <td>
                        <a href="{{route("Public.exportQuest",$questionario->id)}}"><i class=" glyphicon glyphicon-export"></i></a>
                    </td>
                    <td>
                        {!!Form::open(['route'=>['Public.deleteQuest', $questionario->id],'method'=>'delete'])!!}
                        <button type="submit" title="Eliminar">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>


</section>
</body>
@endsection

@section('javascript')
    <script>

    </script>
@endsection