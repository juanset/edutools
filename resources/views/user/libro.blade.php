@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/libro.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro" style="background-color: ghostwhite; border-radius: 10%">
    </a>
@endsection

@section('title','Libro')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.contenedor{height:0;overflow:hidden;padding-bottom:56.25%;padding-top:30px;position:relative}.contenedor.iframe,nav:before{left:0;position:absolute;top:0}.contenedor.iframe{height:100%;width:100%}header,nav{position:relative}.cuerpo{background:#222d32;color:#444;font-family:tahoma;font-size:16px}header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,.2);color:#222D32;overflow:hidden;padding:.5em;z-index:1}header .titular{margin:0 65px 0 70px}header .titular .titulo{font-size:22px;font-weight:400;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:""}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap}nav .menu li{display:inline-block}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em}#flipbook .page{background:#efebe9}#flipbook .page .subt{color:#08357b;margin:.5em}#flipbook .page .title{color:#05204a}#flipbook p{color:#000;text-align:justify;margin:.5em}#flipbook img{width:250px;height:250px;align-items:center;border-radius:5px}#flipbook .hard{background:#02204e;color:#fff;text-align:center}#flipbook .hard .subt{color:#e6dcdc;margin:.5em}#flipbook .hard .title{color:#e6dcdc}</style>
    </header>
    <section class="principal">
        <div class="flipbook">
            @foreach($libros as $libro)
                    {!!$libro->contenido!!}
            @endforeach
        </div>
    </section>
    </body>
@endsection

@section('javascript')
    <script type="text/javascript">
        $("#flipbook").turn({
            width: 800,
            height: 600,
            autoCenter: true
        });
    </script>
@endsection
