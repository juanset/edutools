<!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/Public') }}">
                <img src="{{ asset('img/logoB.png') }}" width="86px" height="89px" alt="Logo Editor" title="Logo Editor">
            </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    @if(Auth::user())
                        Bienvenido {{ Auth::user()->name }}
                    @else
                        Usuario
                    @endif
                    <i class="fa fa-caret-down"></i>
                </a>
                @if(Auth::user())
                    <ul class="dropdown-menu dropdown-user">Holi</ul>
                @else
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Iniciar Sesión</a>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Registrar</a>
                        </li>
                    </ul>
                @endif

                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="">Accesibilidad<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a><label id="increase" for="">Aumentar</label></a>
                            </li>
                            <li>
                                <a><label id="decrease" for="">Disminuir</label></a>
                            </li>
                            <li>
                                <a><label id="increaseInterline" for="">Aumentar Interlineado</label></a>
                            </li>
                            <li>
                                <a><label id="decreaseInterline" for="">Disminuir Interlineado</label></a>
                            </li>
                            <li>
                                <a><label id="" for="contrast">Contraste</label>
                                    <select class="form-control" id="contrast" disabled>
                                        <option value="">Normal</option>
                                        <option value="highContrast1">Negro - Blanco</option>
                                        <option value="highContrast2">Amarillo - Negro</option>
                                        <option value="highContrast3">Azul - Naranja</option>
                                    </select>
                                </a>
                            </li>
                            <li>
                                <a><label id="" for="font">Fuente</label>
                                    <select class="form-control" id="font">
                                        <option value="">Normal</option>
                                        <option value="Arial">Arial</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Courier">Courier</option>
                                        <option value="monospace">Monospace</option>
                                        <option value="Serif">Serif</option>
                                        <option value="'Comic Sans MS'">Comic Sans</option>
                                    </select>
                                </a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{ route('Public.index') }}">Inicio<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('Public.inicioB') }}">Libro</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('Public.inicioB') }}">Instrucciones</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.book') }}">Crear</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.mostrarB') }}">Mostrar</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('Public.inicioC') }}">Contenido</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('Public.inicioC') }}">Instrucciones</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.contenido') }}">Editor</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.mostrarC') }}">Mostrar</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('Public.inicioQ') }}">Questionarios</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('Public.inicioQ') }}">Instrucciones</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.questionario') }}">Crear</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('Public.mostrarQ') }}">Mostrar</a>
                                    </li>
                                </ul>

                            </li>

                        </ul>
                    </li>
                    <li><a href="#">Ver Recursos educativos</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>