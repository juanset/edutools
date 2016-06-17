@extends('template.main')

@section('title','EditorBook')

@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.cuerpo{background:#e8e8e8;color:#444;font-family:tahoma;font-size:16px}footer{background:#dd4f24;color:rgba(255,255,255,0.5);padding:1em 0;text-align:center;width:100%;} .logo{border-right: 1px solid #dd4f24; border-radius: 2px;float: left; width: 50px;}footer h3{font-size:14px;font-weight:normal;}footer h3 strong{display:block}footer h3 .mejor:before,footer h3 .mejor:after{content:" - "}header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,0.2);color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}header .titular{margin:0 65px 0 70px;}header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff;position:relative;}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}nav .menu li{display:inline-block;}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em;}.principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}.principal #flipbook .page .sub{color:#22bce0;}.principal #flipbook .page .sub:hover{color:#000}.principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}.principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}.principal #flipbook .page img:hover{border-radius:10%}.principal #flipbook .hard{border-color: #c9302c;border-style: solid;border-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h3>Seleccione el contenido a agregar</h3>
            <select name="contenido" id="contenido">
                <option value="titulo">Título</option>
                <option value="subtitulo">Subtítulo</option>
                <option value="parrafo">Párrafo</option>
                <option value="imagen">Imagen</option>
            </select><br>
            <h4>En página: </h4>
            <select name="pagina" id="pagina">
                <option value="1" id="p1">1</option>
                <option value="2" id="p2">2</option>
            </select><br>
            <input type="file" id="uploadImage" style="display: none"/>
            <textarea id="texto" type="text" rows="4" cols="50"  style="max-height: 6.4em; max-width: 300px;" placeholder="Digite el contenido a agregar!"></textarea>
            <button id="agregar">Agregar</button>
            <br>
            <p>Crear página después de </p> <input id="add_p" type="number" min="2" placeholder="pagina despues de"><button id="addpage">Crear</button>
            <input type="checkbox" id="portada">Portada?
            <br><br>
            <p>Eliminar la página:</p> <input id="rem_p" type="number" min="1" placeholder="pagina a eliminar"><button id="rempage">Eliminar</button>
        </div>
        <br>
        <div id="flipbook">
            <div class="hard">
                <div id="content1"></div>
            </div>
            <div class="hard">
                <div id="content2"></div>
            </div>

        </div>
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
        $("#flipbook").turn({
            width: 800,
            height: 600,
            autoCenter: true
        });

        $(document).ready(function(){

            var paginas = $("#flipbook").turn("pages");

            $("#contenido").change(function() {
                if($(this).find("option:selected").val() == "imagen") {
                    $("#uploadImage").show();
                    $("#texto").hide();
                    }
                else {
                    $("#texto").show();
                    $("#uploadImage").hide();
                    }
                });

            $("#agregar").click(function(){

                var contenido = $('select[id=contenido]').val();
                var Agregar = $('textarea[id=texto]').val();
                console.log("Esta página es: "+$("#flipbook").turn("page"));
                var pagina =$("#flipbook").turn("page");
                var c = "content"+pagina;
                var addPag = $("#pagina").val();
                c = "content"+addPag;
                addPag = parseInt(addPag);
                console.log("El contenido sera insertado en: "+c);
                //$("#flipbook").turn("page", addPag+1);
                $("#flipbook").turn("page", addPag);
                console.log("Estamos en la página "+ $("#flipbook").turn("page"));

                /*if($('#' + c).length>0){
                    console.log("Ese ContentId ya existe");
                }else
                {
                    $(".page").append('<div id="'+c+'"></div>');
                    console.log("El ConottentId fue creado")
                }*/

                switch (contenido){

                    case "parrafo":
                        $("#"+ c).append('<p class="parr">' + Agregar + '</p>');
                        break;
                    case "titulo":
                        $("#"+ c).append('<h1 class="title">' + Agregar + '</h1>');
                        break;
                    case "subtitulo":
                        $("#"+ c).append('<h3 class="subt">' + Agregar + '</h3>');
                        break;
                    case "imagen":
                        //$("#content").append('<img class="image">' + Agregar + '</img>');
                        $("#"+ c).append('<img src="" id="uploadPreview"class="image"/>');
                        var oFReader = new FileReader();
                        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                        oFReader.onload = function (oFREvent) {
                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                        };
                        break;
                        }
            });

            $("#addpage").click(function () {
                n_pag = $('input[id=add_p]').val();
                n_pag = parseInt(n_pag) + 1;
                c2 = "content" + n_pag;
                element = $("<div />").append('<div id="' + c2 + '"></div>');
                console.log("La página a adicionar es: " + n_pag);
                console.log("El ContentId fue creado en: " + c2 + " página: " + n_pag);
                $("#flipbook").turn("addPage", element, n_pag);
                $("#pagina").append('<option value"' + n_pag + ' "id="p' + n_pag + '">' + n_pag + '</option>');
                $("#flipbook").turn("page", n_pag);
                if ($("#portada").prop('checked')) $(".page").prepend('<div class="hard">');
            });

            $("#rempage").click(function () {
                n_pag = $('input[id=rem_p]').val();
                $("#flipbook").turn("removePage", n_pag);
                //Falta remover el option del selector de páginas para contenido
            });

        });

    </script>
@endsection
