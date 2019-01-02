<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.header')
    @yield('css')
</head>
<body>
    @include('partials.navbar_worker')
    <main role="main" id="contenedor">
        <div id="app">
        @yield('content')
        @section('title', 'CABILDO')
        </div>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>