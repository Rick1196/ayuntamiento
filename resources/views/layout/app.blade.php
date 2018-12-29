<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.header')
    @yield('css')
</head>
<body>
    @include('partials.navbar')
    <main role="main" id="contenedor">
        @yield('content')
        @section('title', 'CABILDO')
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>