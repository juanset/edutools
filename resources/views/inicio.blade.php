@extends('template.main')

@section('title','AUTOOL')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body class="cuerpo">
<section class="principal">
<h3>Bienvenido a la herramienta de autor HTML</h3>
    <h4>Para iniciar selecciona el tipo de contenido a crear, puede ser un libro o una página web, solo necesitas tener lo que desea utilizar en la creación de estos recursos</h4>
    <h4>Para crear un libro dale en <a href="{{ route('Public.inicioB') }}">crear libro</a></h4>
    <h4>Para crear un contenido web dale en <a href="{{ route('Public.inicioC') }}">crear contenido</a></h4>
</section>
</body>
@endsection

@section('javascript')
    <script>

    </script>
@endsection