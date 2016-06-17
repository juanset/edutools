@extends('template.bootstrap')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        Libro TEST
    </title>
    <link href="{{asset('css/normalize.css')}}"/>
    <link href="{{asset('css/book_style.css')}}"/>

</head>
<body>
<header>
    <div class="titular">
        <h1 class="titulo">
            @yield('titleb', 'Librito')
        </h1>
    </div>
</header>
<nav>
    <ul class="menu">
        <li> <a href="#">LIBRO</a> </li>
        <li> <a href="#">Manual</a> </li>
        <li> <a href="#">Manual</a> </li>
    </ul>
</nav>
<section class="principal">

    <div id="flipbook">
        @yield('flipbook')
    </div>
    <script type="text/javascript">
    $("#flipbook").turn({
    width: 800,
    height: 600,
    autoCenter: true
    });
    </script>
</section>
<footer>
    <h3>
        <strong>Powered By Juanset</strong>
				<span class="mejor">
					compuset.co 2016
				</span>
    </h3>
</footer>
<script src="{{asset('plugins/turnjs4/lib/turn.js')}}"></script>
</body>
</html>
