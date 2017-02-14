@extends('template.main')

@section('icon')
    <a class="navbar-brand" href="{{ url('/Public') }}">
        <img src="{{ asset('img/questionario.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro">
    </a>
@endsection

@section('title','Questionario')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>.principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div>
            @foreach($cuestionarios as $pregunta)
                <h3>Cuestionario #{!!$pregunta->id!!}</h3>
                {!!$pregunta->contenido!!} @endforeach
        </div>
    </section>

    </body>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            function validaP(formulario, nombre){
                elementos = document.getElementById(formulario).elements;
                longitud = document.getElementById(formulario).length;
                for (var i = 0; i < longitud; i++) {
                    if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
                        return elementos[i].value;
                    }
                }
                return null;
            };

            $("#verificar").click(function() {
                var correctas = 0;
                $("#elcuestionario form").each(function (index)
                {
                    indice = index+1;
                    var radioU = validaP("pre"+indice, "pre"+indice);
                    var radioP = $("#pre"+indice).attr("opcion");
                    if(radioU==radioP)
                    {
                        $("#pre"+indice).css("background-color","#CCFF90");
                        correctas +=1;
                    }
                    else
                    {
                        $("#pre"+indice).css("background-color","#FF9E80");

                    }

                });
                alert("Preguntas correctas: "+ correctas);

            }); //verificar2
        });//ready
    </script>
@endsection
