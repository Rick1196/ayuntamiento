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
    @include('partials.scripts')

    <div class="bg_load"></div>
    <div class="wrapper">
        <div class="inner">
            <span>T</span>
            <span>o</span>
            <span>l</span>
            <span>u</span>
            <span>c</span>
            <span>a</span>
        </div>
    </div>
</body>
</html>
