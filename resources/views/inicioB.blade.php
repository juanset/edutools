@extends('template.main')
@section('icon')
    <a class="navbar-brand" href="{{ url('/Public') }}">
        <img src="{{ asset('img/libro2.png') }}" width="auto" height="89px" alt="Logo libro" title="Logo libro">
    </a>
@endsection
@section('title','EditorBook')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.contenedor{heigth:0; overflow:hidden;padding_bottom:56.25%;paddong-top:30px;position: relative;}.contenedor.iframe{height:100%;left:0;position: absolute;top:0;width:100%;}.cuerpo{background: #222d32;color:#444;font-family:tahoma;font-size:16px}  footer{background: #d8e0e2;color:#a6b4cd;text-align:center;height:150px;width:100%;}  .logo{border-right: 1px solid #dd4f24; border-radius: 2px;float: left; width: 50px;}  footer h3{font-size:14px;font-weight:normal;}  footer h3 strong{display:block}  footer h3 .mejor:before,footer h3 .mejor:after{content:" - "}  header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,0.2);color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}  header .titular{margin:0 65px 0 70px;}  header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}  nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}  nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}  nav .menu li{display:inline-block;}  nav .menu li:hover{background:#dd4f24}  nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}  .principal{padding:.5em;}  .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h3>Bienvenido</h3>
            <h4>Acá puedes crear tus recursos educativos en forma de libro, para iniciar es recomendable que tengas definido el tema que quieres poner en el libro, como el contenido que va a tener el libro</h4>
            <h4>Debes seleccionar el tipo de contenido, la página e insertar el contenido.</h4>
            <br>
            <div class="contenedor">
                <center>
                    {!! Embed::make('https://www.youtube.com/watch?v=66XHEccbJ9s')->parseUrl()->getIframe()!!}
                </center>
            </div>
            <br><br>
            <center>
                <a class="hvr-bounce-in" href="{{ route('Public.book') }}">
                    <img src="{{ asset('img/libro.png') }}" width="auto" height="89px" alt="Logo book" title="Logo book"><br>Crea tu libro
                </a>
            </center>

        </div>
        <br>

    </section>
    </body>
@endsection

@section('javascript')
    <script type="text/javascript">

    </script>
@endsection
