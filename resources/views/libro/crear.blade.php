@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/libro.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro"style="background-color: ghostwhite; border-radius: 10%">
    </a>
@endsection

@section('title','EditorBook')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.contenedor{height:0;overflow:hidden;padding-bottom:56.25%;padding-top:30px;position:relative}.contenedor.iframe,nav:before{left:0;position:absolute;top:0}.contenedor.iframe{height:100%;width:100%}header,nav{position:relative}.cuerpo{background:#222d32;color:#444;font-family:tahoma;font-size:16px}header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,.2);color:#222D32;overflow:hidden;padding:.5em;z-index:1}header .titular{margin:0 65px 0 70px}header .titular .titulo{font-size:22px;font-weight:400;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:""}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap}#flipbook .hard img,#flipbook .page img,#flipbook img{width:250px;height:250px;border-radius:5px}nav .menu li{display:inline-block}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em}#flipbook .page{background:#efebe9}#flipbook .page .subt{color:#08357b;margin:.5em;text-decoration:underline}#flipbook .page .title{color:#05204a;text-align:center}#flipbook .page img{margin-left:75px;margin-top:5px}#flipbook .page p{color:#000;text-align:justify;margin:.7em}#flipbook .hard{background:#02204e;color:#fff}#flipbook .hard img{margin-left:75px;margin-top:5px}#flipbook .hard .title{color:#e6dcdc;text-align:center}#flipbook .hard .subt{color:#e6dcdc;text-decoration:underline;margin:.5em}#flipbook .hard p{color:#e6dcdc;margin:.7em}#flipbook img{margin-left:75px;margin-top:5px}</style>
    </header>
    <section class="principal">

        <div class="options col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;">

            <div style="border:solid; border-color:#d3d3d3;">
               <div class="row">
                   <div class="col-xs-6"><h4>En página: </h4></div>
                <div class="col-xs-6">
                    <select name="pagina" id="pagina" style="position:relative;z-index:10;">
                    <option value="1" id="p1">1</option>
                    <option value="2" id="p2">2</option>
                </select>
                </div>
               </div>
                <textarea id="texto" style="height: 260px; width: 237px; position:relative; z-index:1;" placeholder="Digite el contenido a agregar!"></textarea>

                <input type="file" id="uploadImage" style="display: none; position:relative; z-index:1;" />
                <h5>Seleccione el tipo de contenido a agregar:</h5>
                <select style="position:relative; z-index:1;" name="contenido" id="contenido">
                    <option value="titulo">Título</option>
                    <option value="subtitulo">Subtítulo</option>
                    <option value="parrafo">Párrafo</option>
                    <option value="imagen">Imagen</option>
                </select>
                <button id="agregar" class="btn btn-primary" style="position:relative; z-index:1;">Agregar</button>
            </div>
            <br>
            <div style="border:solid; border-color:#d3d3d3;">
                <p>Crear página después de</p>
                <input id="add_p" type="number" min="2" max="2" placeholder="#" value="2" style="width: 50px;">
                <button class="btn btn-primary" style="position:relative; z-index:1;" id="addpage">Crear</button>
                <p>Eliminar la página:</p>
                <input id="rem_p" type="number" min="1" placeholder="#" style="width: 50px;">
                <button class="btn btn-danger" style="position:relative; z-index:1;" id="rempage">Eliminar</button>
            </div>
        </div>

        <div id="librote" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="float: left;">
            <div id="flipbook">
                <div class="hard pagina">
                    <div class="content-create" id="content1"></div>
                </div>
                <div class="hard pagina">
                    <div class="content-create" id="content2"></div>
                </div>
            </div>
        </div>

        <div>
            {!! Form::open(['route' => 'Store.libro', 'method' => 'POST', 'id' => 'form_libro', 'class'=>'form-horizontal' ]) !!}
            <div class="form-group">
                <!--<input type="hidden" name="_method" value="POST">
                {!! Form::text('contenido',null,['class' => 'form-control col-lg-offset-1','id' => 'kontenido','style'=>'display:none;']) !!}
                 -->
                <div id="kontenido" style="display: none"></div>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
            </div>
            <div class="btn-group">
                <label for="titulo">Antes de guardar... Digita el Título del libro:</label>
                <br>
                <input type="text" id="titulo" name="titulo" required><br><br>
                <button type="submit" class="btn btn-success" value="Guardar" id="btnGuardar">Guardar</button>

            </div>
            {!! Form::close() !!}
        </div>
    </section>

    </body>
@endsection @section('javascript')
    <script type="text/javascript">
        $("#flipbook").turn({
            width: 800,
            height: 600,
            autoCenter: true
        });

        $(document).ready(function() {
            var paginas = $("#flipbook").turn("pages");

            $("#contenido").change(function() {
                if ($(this).find("option:selected").val() == "imagen") {
                    $("#uploadImage").show();
                    $("#texto").hide();
                } else {
                    $("#texto").show();
                    $("#uploadImage").hide();
                }
            });

            $("#agregar").click(function() {

                var contenido = $('select[id=contenido]').val();
                var Agregar = $('textarea[id=texto]').val();
                console.log("Esta página es: " + $("#flipbook").turn("page"));
                var pagina = $("#flipbook").turn("page");
                var c = "content" + pagina;
                var addPag = $("#pagina").val();
                c = "content" + addPag;
                addPag = parseInt(addPag);
                console.log("El contenido sera insertado en: " + c);
                $("#flipbook").turn("page", addPag);
                console.log("Estamos en la página " + $("#flipbook").turn("page"));
                $("#uploadImage").hide();
                $("#contenido").val("titulo");
                $("#texto").show();

                /*if($('#' + c).length>0){
                 console.log("Ese ContentId ya existe");
                 }else
                 {
                 $(".page").append('<div id="'+c+'"></div>');
                 console.log("El ContentId fue creado")
                 }*/

                switch (contenido) {

                    case "parrafo":
                        $("#" + c).append('<p class="parr">' + Agregar + '</p>');
                        break;
                    case "titulo":
                        $("#" + c).append('<h1 class="title">' + Agregar + '</h1>');
                        break;
                    case "subtitulo":
                        $("#" + c).append('<h3 class="subt">' + Agregar + '</h3>');
                        break;
                    case "imagen":
                        n_img = $("#flipbook").turn("page");
                        //n_img = parseInt(n_img) + 1;
                        ide = "imagen" + n_img;
                        $("#" + c).append('<img src="" id="'+ide+'" class="image"/>');
                        var oFReader = new FileReader();
                        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                        oFReader.onload = function(oFREvent) {
                           // $("#"+ide).src(oFREvent.target.result);
                           document.getElementById(ide).src = oFREvent.target.result;
                        };
                        break;
                }
                $("#texto").val("");

            });

            $("#addpage").click(function() {
                n_pag = $('input[id=add_p]').val();
                n_pag = parseInt(n_pag) + 1;
                c2 = "content" + n_pag;
                element = $("<div />").append('<div class="content-create" id="' + c2 + '"></div>');
                console.log("La página a adicionar es: " + n_pag);
                console.log("El ContentId fue creado en: " + c2 + " página: " + n_pag);
                $("#flipbook").turn("addPage", element, n_pag);
                $("#pagina").append('<option value"' + n_pag + ' "id="p' + n_pag + '">' + n_pag + '</option>');
                $("#flipbook").turn("page", n_pag);
                var max_actual = $('#add_p').attr('max');
                $('#add_p').attr('max', parseInt(max_actual) + 1);
                $('#add_p').attr('min', parseInt(max_actual) + 1);
                $('#add_p').val(parseInt(max_actual) + 1);

            });

            $("#rempage").click(function() {
                n_pag = $('input[id=rem_p]').val();
                $("#flipbook").turn("removePage", n_pag);
                //Falta remover el option del selector de páginas para contenido
            });

            //Guardar el contenido AJAX post
            $("#btnGuardar").click(function() {
                //var datos= [];
                var div_contenido = $("#kontenido");
                $("#flipbook div .content-create").delay( 800 ).each(function (index)
                { //Mostrando la consola y el alert guarda bien,  si no cambia el orden de la primer pagina con la 2da
                    //console.log($(this).html());
                    //alert(index+" "+$(this).html());

                    if(index == 0 || index == 1){
                        //datos[index] = '<div class="pagina hard">' + $(this).html() + '</div>';
                        div_contenido.append('<div class="pagina hard">' + $(this).html() + '</div>');
                    } else{
                        div_contenido.append('<div class="pagina">' + $(this).html() + '</div>');
                        //datos[index] = '<div class="pagina">' + $(this).html() + '</div>';
                    }
                });
                /*for(var i = 0; i < datos.length; i++){
                    div_contenido.append(datos[i]);
                }*/

                var contenido = '<div id="flipbook">'+$("#kontenido").html()+'  <div class="hard pagina"> <div class="content-create" id="content1"></div></div><div class="hard pagina"> <div class="content-create" id="content2">Creado con: Edutoools</div></div></div>';
                var titulo = $("#titulo").val();
                var form = $("#form_libro");
                var url = form.attr('action');
                var token = $("#token").val();
                console.log("Enviado: " + contenido);
                $.post(url,  { contenido: contenido, titulo: titulo }, function(result) {
                    alert("Libro guardado");
                });

            });


        });
    </script>
@endsection