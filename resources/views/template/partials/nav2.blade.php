<!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @yield('icon')

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    @if(Auth::user())
                        Bienvenido {{ Auth::user()->name }}
                    @else
                        @yield('nav2usuario','Usuario')
                    @endif
                    <i class="fa fa-caret-down"></i>
                </a>
                @if(Auth::user())
                    <ul class="dropdown-menu dropdown-user">
                    @if(Auth::user()->id_rol == 1)

                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>

                    @elseif(Auth::user()->id_rol == 2)

                        <li><a href="{{ route('Creador.show', Auth::user()->id)}}"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                        <li class="divider"></li>

                    @elseif(Auth::user()->id_rol == 3)

                        <li><a href="{{ route('Estudiante.show', Auth::user()->id)}}"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                    @endif
                        <li class="divider"></li>
                        <li>
                        <a href="{{ url('/logout') }}">
                            <i class="fa fa-sign-out fa-fw"></i>
                            Cerrar Sesión
                        </a>
                        </li>
                    </ul>
                @else
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{route('flogin')}}" ><i class="fa fa-user fa-fw"></i> Iniciar sesion</a>
                        <li><a href="{{ route('fregistry')}}"><i class="fa fa-user fa-fw"></i> Registrar</a>
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
                    <li><a href="{{ route('Public.mostrarT') }}">Ver Recursos educativos</a></li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>