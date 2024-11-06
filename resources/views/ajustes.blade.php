<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/INMOBILIARIA-removebg-preview.png') }}" type="image/png">
    <title>Inmobiliaria RentaBien</title>
    <style>
        /* Reset de márgenes y rellenos */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Estilos generales del cuerpo */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            color: #000;
            font-size: 15px;
            line-height: 1.5;
        }

        a {
            color: #262626;
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* Estilos para la navegación principal */
        .main-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            padding: 20px 0;
            font-size: 13px;
        }

        .main-nav .logo {
            width: 110px;
        }

        .main-nav ul {
            display: flex;
        }

        .main-nav ul li {
            padding: 0 10px;
        }

        .main-nav ul li a {
            padding-bottom: 2px;
        }

        .main-nav ul li a:hover {
            border-bottom: 2px solid #262626;
        }

        .main-nav ul.main-menu {
            flex: 1;
            margin-left: 20px;
        }

        /* Botón del menú */
        .menu-btn {
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 30px;
            z-index: 2;
            display: none;
        }

        /* Estilos para el botón de sesión */
        .btn-session {
            cursor: pointer;
            display: inline-block;
            border: 0;
            font-weight: bold;
            padding: 10px 20px;
            background: #ffffff;
            color: #000000; /* Texto negro */
            font-size: 15px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .dark {
            color: #fff;
        }

        .dark .btn {
            background: #ffffff;
            color: #333;
        }

        /* Despliegue del menú de usuario */
        .user-menu {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-menu .dropdown-item {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        .user-menu:hover .dropdown-menu {
            display: block;
        }

        /* Estilo del menú de ajustes */
        .settings-menu {
            position: relative;
            display: inline-block;
        }

        .settings-dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .settings-dropdown-menu .settings-item {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .settings-dropdown-menu .settings-item:hover {
            background-color: #f1f1f1;
        }

        .settings-menu:hover .settings-dropdown-menu {
            display: block;
        }

    </style>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <div class="container">
        <!-- Navegación principal -->
        <nav class="main-nav">
            <img src="{{ asset('img/INMOBILIARIA__1_-removebg-preview.png') }}" alt="RentaBien Logo" class="logo">

            <ul class="main-menu">
                <li><a href="{{ route('dashboard') }}">INICIO</a></li>
                <li><a href="{{ route('registrodevivienda') }}">REGISTRO DE VIVIENDA</a></li>
                <li class="settings-menu">
                    <a href="#">AJUSTES</a>
                    <div class="settings-dropdown-menu">
                        <a href="{{ route('profile.edit') }}" class="settings-item">Perfil</a>
                        <a href="#" class="settings-item">Seguridad</a>
                        <a href="#" class="settings-item">Preferencias</a>
                    </div>
                </li>
            </ul>

            <!-- Menú de usuario con nombre y cerrar sesión -->
            <div class="user-menu">
                <a href="#" class="btn-session">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Perfil</a>
                    <!-- Formulario para cerrar sesión -->
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <!-- El enlace simula el envío del formulario -->
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </form>
                </div>
            </div>
        </nav>

        <br><br>

        <section class="container about">
            <div class="filter-container">
                <h2 class="subtitle">VIVIENDAS</h2>
            </div>
        </section>

    </div>

    <script>
        // JavaScript para enviar el formulario de cierre de sesión
        function logout() {
            document.getElementById('logout-form').submit();
        }
    </script>
</body>
</html>
    