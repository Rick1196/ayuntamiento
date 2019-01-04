<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/prensa">PRENSA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.dependencias') }}">DEPENDENCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tramites.servicios')}}">TRÁMITES Y SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/toluca">NUESTRO MUNICIPIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.transparencia') }}">TRANSPARENCIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">CONTACTO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.posts') }}">
                                Administrar publicaciones
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