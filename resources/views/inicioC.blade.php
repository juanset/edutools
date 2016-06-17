@extends('template.main')

@section('title','ContentCreator')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>editor</title>
    <style>

    </style>

</head>

<body class="cuerpo">
<section class="principal">
<h2>Bienvenido al creador de contenido</h2>
    <p>Para iniciar a crear tu página te recomendamos tener preparado el contenido que quieras insertar en ella</p>
    <p>Recuerda que puedes utilizar imagenes y videos que muestren lo que quieres compartir.</p>
    <h3>para continuar dale en <a href="{{ route('Public.contenido') }}">crear contenido</a></h3>
</section>
</body>
@endsection

@section('javascript')
    <script>

    </script>
@endsection
