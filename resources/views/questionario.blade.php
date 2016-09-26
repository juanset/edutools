@extends('template.main')

@section('title','Questionario')

@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.cuerpo{background:#e8e8e8;color:#444;font-family:tahoma;font-size:16px}footer{background:#dd4f24;color:rgba(255,255,255,0.5);padding:1em 0;text-align:center;width:100%;} .logo{border-right: 1px solid #dd4f24; border-radius: 2px;float: left; width: 50px;}footer h3{font-size:14px;font-weight:normal;}footer h3 strong{display:block}footer h3 .mejor:before,footer h3 .mejor:after{content:" - "}header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,0.2);color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}header .titular{margin:0 65px 0 70px;}header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff;position:relative;}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}nav .menu li{display:inline-block;}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em;}.principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}.principal #flipbook .page .sub{color:#22bce0;}.principal #flipbook .page .sub:hover{color:#000}.principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}.principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}.principal #flipbook .page img:hover{border-radius:10%}.principal #flipbook .hard{border-color: #c9302c;border-style: solid;border-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h3>Seleccione la pregunta a agregar</h3>
            <input type="button" id="vf" value="Verdadero/Falso">
            <input type="button" id="selmul" value="Selección Multiple">
        </div>
        <br>
        <div id="qvf"  style="display: none;border: double">
            <form name="form_vf">
            Esta es una pregunta de verdadero falso, escribe la pregunta e indica la respuesta correcta <br>
                <section id="questionVF">
                    <form action="">
                    <textarea class="con_pre" id="textoVF" type="text" rows="2" cols="50"  style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la pregunta a agregar!"></textarea><br>
                    <input type="radio" id="true" name="tf" value="true"><label for="true">Verdadero!</label> <br>
                    <input type="radio" id="false" name="tf" value="false"><label for="false">Falso</label> <br>
                    <input class="guardar" id="guardarVF" type="button" value="Guardar">
                    </form>
                </section>
            </form>
        </div>
        <div id="qsm" style="display: none; border: double" >
            Esta es una pregunta de de selección múltiple <br>
            <form name="form_SM">
                <section id="artisanquestionSM">
                    <textarea class="con_pre" id="textoSM" type="text" rows="2" cols="50"  style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la pregunta a agregar!"></textarea><br>
                    <textarea class="con_pre" id="textoOptSM" type="text" rows="1" cols="25"  style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la opción a agregar!"></textarea><br>
                </section>
            </form>
            <form id="questionOpciones">

            </form>
            <input type="button" id="opc" value="Opción"> <br>
            <!--<input type="button" value="elim"> <br>-->
            <input class="guardar" id="guardarSM" type="button" value="Guardar">
        </div>
    </section>
    <section id="cuestionario" style="border-style: groove; border-color: grey;">

    </section>

    <footer class="piep">
        <h3>
            <strong>Powered By Juanset</strong>
				<span class="mejor">
					compuset.co 2016
				</span>
        </h3>
    </footer>
    </body>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            var p = 0;
            $('#vf').on('click', function(event) {
                $('#qvf').toggle('show');
                $('#qsm').hide();
                $('#qop').hide();
            });
            $('#selmul').on('click', function(event) {
                $('#qsm').toggle('show');
                $('#qvf').hide();
                $('#qop').hide();
            });
            //Guarda pregunta Verdadero Falso
            $("#guardarVF").click(function(){
                p++;
                pregunta =  "pre"+p;
                var contenido = $('textarea[id=textoVF]').val();
                console.log("Esta pregunta es: "+contenido);
                $("#cuestionario").append('<section id="'+pregunta+'" style="border-style: dashed; border-color: #985f0d"><p class="q" >' + contenido + '</p>'+'<input type="radio" id="true'+p+'" name="ft'+p+'" value="true">'+'<label for="true'+p+'">'+'Verdadero!'+'</label>'+'<br>'+'<input type="radio" id="false'+p+'" name="ft'+p+'" value="false">'+'<label for="false'+p+'">'+'Falso'+'</label></section>'+'<br>');
                $("#textoVF").val("");
            });
            //Guarda pregunta seleccion multiple
            $("#guardarSM").click(function(){
                p++;
                pregunta =  "pre"+p;
                var contenido2 = $('textarea[id=textoSM]').val();
                console.log("Esta pregunta es: "+contenido2);
                $("#cuestionario").append('<section id="'+pregunta+'" style="border-style: solid; border-color: limegreen"><p class="q">' + contenido2 + '</p></section>');
                $("#textoSM").val("");
                $("#questionOpciones").clone().appendTo("#"+pregunta);
                $("#questionOpciones").empty();
            });
            //Guarda opcion de seleccion multiple
            $("#opc").click(function(){
                var contenido3 = $('textarea[id=textoOptSM]').val();
                console.log("Esta opcion es: "+contenido3);
                $("#questionOpciones").append('<input type="radio" name="opSm">'+contenido3+'<br>');
                $("#textoOptSM").val("");

            });

        });

    </script>
@endsection
