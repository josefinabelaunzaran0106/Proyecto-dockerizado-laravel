<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | {{ config('app.name') }}</title>

    <link
        rel="icon"
        type="image/png"
        href="/images/facturacion-logo.png"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dashboard-page">

    <div class="dashboard-layout">

        <!-- Sidebar -->
        <aside class="dashboard-sidebar">

            <div class="dashboard-sidebar-header">

                <img
                    src="/images/facturacion-logo.png"
                    alt="{{ config('app.name') }}"
                    class="dashboard-logo"
                >

                <span class="dashboard-brand">
                    {{ config('app.name') }}
                </span>

            </div>


            <nav class="dashboard-nav">

                <a
                    href="/dashboard"
                    class="dashboard-nav-item dashboard-nav-item-active"
                >
                    <span class="dashboard-nav-icon">⌂</span>
                    <span>Inicio</span>
                </a>

                <a
                    href="#"
                    class="dashboard-nav-item"
                >
                    <span class="dashboard-nav-icon">♙</span>
                    <span>Clientes</span>
                </a>

                <a
                    href="#"
                    class="dashboard-nav-item"
                >
                    <span class="dashboard-nav-icon">▣</span>
                    <span>Productos</span>
                </a>

                <a
                    href="#"
                    class="dashboard-nav-item"
                >
                    <span class="dashboard-nav-icon">▤</span>
                    <span>Facturas</span>
                </a>

                <a
                    href="#"
                    class="dashboard-nav-item"
                >
                    <span class="dashboard-nav-icon">◷</span>
                    <span>Pagos</span>
                </a>

            </nav>


            <div class="dashboard-sidebar-footer">

                <form method="POST" action="/logout">
                    @csrf

                    <button
                        type="submit"
                        class="dashboard-logout"
                    >
                        <span class="dashboard-nav-icon">↪</span>
                        <span>Cerrar sesión</span>
                    </button>

                </form>

            </div>

        </aside>


        <!-- Contenido -->
        <div class="dashboard-main">

            <!-- Header -->
            <header class="dashboard-header">

                <div class="dashboard-header-title">

                    <h1>Dashboard</h1>

                    <p>
                        Resumen general del sistema
                    </p>

                </div>


                <div class="dashboard-user">

                    <div class="dashboard-user-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>

                    <div class="dashboard-user-info">

                        <span class="dashboard-user-name">
                            {{ auth()->user()->name }}
                        </span>

                        <span class="dashboard-user-role">
                            Administrador
                        </span>

                    </div>

                </div>

            </header>


            <!-- Contenido principal -->
            <main class="dashboard-content">

                <section class="dashboard-welcome">

                    <h2>
                        Bienvenido, {{ auth()->user()->name }}
                    </h2>

                    <p>
                        Desde este panel podés gestionar la información
                        administrativa de tu negocio.
                    </p>

                </section>


                <!-- Resumen -->
                <section class="dashboard-summary">

                    <div class="dashboard-card">

                        <div class="dashboard-card-icon">
                            ♙
                        </div>

                        <div class="dashboard-card-info">

                            <span class="dashboard-card-label">
                                Clientes
                            </span>

                            <strong class="dashboard-card-value">
                                128
                            </strong>

                        </div>

                    </div>


                    <div class="dashboard-card">

                        <div class="dashboard-card-icon">
                            ▤
                        </div>

                        <div class="dashboard-card-info">

                            <span class="dashboard-card-label">
                                Facturas
                            </span>

                            <strong class="dashboard-card-value">
                                342
                            </strong>

                        </div>

                    </div>


                    <div class="dashboard-card">

                        <div class="dashboard-card-icon">
                            ▣
                        </div>

                        <div class="dashboard-card-info">

                            <span class="dashboard-card-label">
                                Productos
                            </span>

                            <strong class="dashboard-card-value">
                                86
                            </strong>

                        </div>

                    </div>


                    <div class="dashboard-card">

                        <div class="dashboard-card-icon">
                            ◷
                        </div>

                        <div class="dashboard-card-info">

                            <span class="dashboard-card-label">
                                Pendientes
                            </span>

                            <strong class="dashboard-card-value">
                                12
                            </strong>

                        </div>

                    </div>

                </section>


                <!-- Acciones rápidas -->
                <section class="dashboard-section">

                    <div class="dashboard-section-header">

                        <div>
                            <h2>Acciones rápidas</h2>

                            <p>
                                Accedé rápidamente a las principales funciones.
                            </p>
                        </div>

                    </div>


                    <div class="dashboard-actions">

                        <a href="#" class="dashboard-action">

                            <span class="dashboard-action-icon">
                                ♙
                            </span>

                            <span>
                                <strong>Nuevo cliente</strong>
                                <small>Registrar un cliente</small>
                            </span>

                        </a>


                        <a href="#" class="dashboard-action">

                            <span class="dashboard-action-icon">
                                ▣
                            </span>

                            <span>
                                <strong>Nuevo producto</strong>
                                <small>Agregar un producto</small>
                            </span>

                        </a>


                        <a href="#" class="dashboard-action">

                            <span class="dashboard-action-icon">
                                ▤
                            </span>

                            <span>
                                <strong>Nueva factura</strong>
                                <small>Generar una factura</small>
                            </span>

                        </a>

                    </div>

                </section>

            </main>

        </div>

    </div>

</body>
</html>