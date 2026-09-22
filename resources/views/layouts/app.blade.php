<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name'))</title>

    <link rel="icon" type="image/png" href="/images/facturacion-logo.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="landing-header">

        <div class="landing-brand">
            <img
            src="/images/facturacion-logo.png"
            alt="{{ config('app.name') }}"
            class="landing-brand-logo"
            >
            <h1>{{ config('app.name') }}</h1>
        </div>

        <nav class="landing-nav">
            <a href="/">Inicio</a>
            <a href="#caracteristicas">Características</a>
            <a href="/login" class="landing-nav-login">
                Ingresar
            </a>
        </nav>

    </header>


    <main>
        @yield('content')
    </main>


    <footer class="landing-footer">
        <p>
            &copy; {{ date('Y') }} {{ config('app.name') }}.
            Todos los derechos reservados.
        </p>
    </footer>

</body>
</html>