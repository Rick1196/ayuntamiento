<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.header')
    @yield('css')
</head>
</head>
<body >
    @include('partials.navbar')
    <main role="main" id="contenedor">
        @yield('content')
        @section('title', 'CABILDO')
    </main>
    @include('partials.footer')
    @include('partials.scripts1')
    @yield('scriptcase')
    <div class="bg_load"> 
            <img src="{{asset('img/LogoTOLUCA.jpg')}}" style=" height: 100%;width:100%;background-position: center;background-repeat: no-repeat;background-size: cover;" alt="Toluca">
    </div>
    <div class="wrapper">
        <div class="inner">
        </div>
    </div>
</body>
</html>
