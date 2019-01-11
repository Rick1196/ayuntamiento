<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #641c34;">
        <a class="navbar-brand" href="/">TOLUCA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @guest
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="login">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        @else
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">H. AYUNTAMIENTO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cabildo">CABILDO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            PRENSA
                        </a>

                        <a class="nav-link" href="/prensa"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('app.prensa') }}">
                                    Noticias
                                </a>
                        </div>
                    </li>
                    <!--
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('app.dependencias') }}">DEPENDENCIAS</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tramites.servicios')}}">TRÁMITES Y SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/toluca">NUESTRO MUNICIPIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         TRANSPARENCIA
                        </a>

                    <a class="nav-link" href="/transaperencia"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/documentos_publicos">
                                    IPOMEX
                                </a>
                                <a class="dropdown-item" href="/documentos_publicos">
                                    DOCUMENTOS PUBLICOS
                                </a>
                                <a class="dropdown-item" href="/transparencia_activa">
                                    TRANSPARENCIA ACTIVA
                                </a>
                                <a class="dropdown-item" href="{{ route('app.licitaciones') }}">
                                    LICITACIONES
                                </a>
                                @guest
                            @else
                            <a class="dropdown-item" href="/docs_pub">
                                ADMINISTRAR DOCUMENTOS PUBLICOS
                            </a>
                            @endguest
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            CONTACTO
                        </a>
            
                        <a class="nav-link" href="/contacto"></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('app.contacto') }}">
                                CONTACTO
                                </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.posts') }}">
                                Administrar publicaciones
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.noticias') }}">
                                Administrar noticas
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.sitios') }}">
                                Administrar directorio turistico
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.cabildo') }}">
                                Administrar cabildo
                            </a>
                            @if(Auth::user()->hasRole('admin'))
                                <a class="dropdown-item" href="{{ route('administracion') }}">
                                    Administrar usuarios
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        @endguest
    </nav>
  </header>