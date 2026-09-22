@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <section class="landing-hero">

        <div class="landing-hero-content">

            <span class="landing-hero-label">
                Sistema administrativo
            </span>

            <h2>
                Gestioná tu negocio de manera simple y ordenada.
            </h2>

            <p class="landing-hero-description">
                Administrá clientes, productos, facturas y pagos
                desde una única plataforma.
            </p>

            <div class="landing-hero-actions">

                <a href="/login" class="landing-button-primary">
                    Ingresar al sistema
                </a>

                <a href="#caracteristicas" class="landing-button-secondary">
                    Conocer más
                </a>

            </div>

        </div>


        <div class="landing-hero-visual">

            <div class="landing-dashboard-card">

                <div class="landing-dashboard-header">
                    <span>Resumen</span>
                    <strong>Dashboard</strong>
                </div>

                <div class="landing-dashboard-item">
                    <span class="landing-dashboard-item-label">
                        Clientes
                    </span>

                    <span class="landing-dashboard-item-value">
                        128
                    </span>
                </div>

                <div class="landing-dashboard-item">
                    <span class="landing-dashboard-item-label">
                        Facturas
                    </span>

                    <span class="landing-dashboard-item-value">
                        342
                    </span>
                </div>

                <div class="landing-dashboard-item">
                    <span class="landing-dashboard-item-label">
                        Productos
                    </span>

                    <span class="landing-dashboard-item-value">
                        86
                    </span>
                </div>

                <div class="landing-dashboard-item">
                    <span class="landing-dashboard-item-label">
                        Pendientes
                    </span>

                    <span class="landing-dashboard-item-value">
                        12
                    </span>
                </div>

            </div>

        </div>

    </section>


    <section class="landing-features" id="caracteristicas">

        <div class="landing-features-container">

            <div class="landing-section-heading">

                <h3>
                    Todo lo que necesitás
                </h3>

                <p>
                    Una herramienta centralizada para administrar
                    la información de tu negocio.
                </p>

            </div>


            <div class="landing-feature-grid">

                <article class="landing-feature-card">

                    <div class="landing-feature-icon">
                        👤
                    </div>

                    <h4>
                        Clientes
                    </h4>

                    <p>
                        Registrá y administrá la información
                        de tus clientes de forma centralizada.
                    </p>

                </article>


                <article class="landing-feature-card">

                    <div class="landing-feature-icon">
                        📦
                    </div>

                    <h4>
                        Productos
                    </h4>

                    <p>
                        Gestioná productos, servicios,
                        precios y disponibilidad.
                    </p>

                </article>


                <article class="landing-feature-card">

                    <div class="landing-feature-icon">
                        🧾
                    </div>

                    <h4>
                        Facturación
                    </h4>

                    <p>
                        Creá y consultá facturas y mantené
                        un registro ordenado de tus operaciones.
                    </p>

                </article>

            </div>

        </div>

    </section>

@endsection