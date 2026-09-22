
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ingresar | {{ config('app.name') }}</title>

    <link rel="icon" type="image/png" href="/images/logo.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="login-page">

    <main class="login-container">

        <section class="login-card">

            <div class="login-header">

                <img
                    src="/images/facturacion-logo.png"
                    alt="{{ config('app.name') }}"
                    class="login-logo"
                >

                <h1>
                    {{ config('app.name') }}
                </h1>

                <p>
                    Ingresá a tu cuenta
                </p>

            </div>

            @if ($errors->any())
                <div class="login-error">
                    {{ $errors->first() }}
                </div>
            @endif
            
            <form
                method="POST"
                action="{{ route('login') }}"
                class="login-form"
            >
                @csrf

                <div class="login-field">

                    <label for="email">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="correo@ejemplo.com"
                        autocomplete="email"
                        required
                    >

                </div>


                <div class="login-field">

                    <label for="password">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ingresá tu contraseña"
                        autocomplete="current-password"
                        required
                    >

                </div>


                <div class="login-options">

                    <label class="login-remember">

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        <span>
                            Recordarme
                        </span>

                    </label>

                    <a href="#" class="login-forgot">
                        ¿Olvidaste tu contraseña?
                    </a>

                </div>


                <button
                    type="submit"
                    class="login-button"
                >
                    Ingresar
                </button>

            </form>


            <div class="login-footer">

                <a href="/">
                    ← Volver al inicio
                </a>

            </div>

        </section>

    </main>

</body>
</html>