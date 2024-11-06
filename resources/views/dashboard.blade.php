<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/INMOBILIARIA-removebg-preview.png') }}" type="image/png">
    <title>Inmobiliaria RentaBien</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

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

        /* Nav */
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

        .btn-session {
            cursor: pointer;
            display: inline-block;
            border: 0;
            font-weight: bold;
            padding: 10px 20px;
            background: #ffffff;
            color: #000000;
            font-size: 15px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Busqueda y filtro */
        .filter-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .filter-form {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .filter-input {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: auto;
            min-width: 150px;
        }

        .filter-button {
            padding: 8px 16px;
            background-color: #2091F9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .filter-button:hover {
            background-color: #0073e6;
        }

        .property-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .property-item {
            width: 300px;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .property-item img {
            width: 100%;
            height: 200px; /* Altura fija para todas las imágenes */
            object-fit: cover; /* Ajusta la imagen para llenar el contenedor */
            border-radius: 5px;
        }

        /* Despliegue de usuario */
        .user-menu {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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

        /* Menu Ajustes */
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
    <div class="container">
        <!-- Nav -->
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
            <div class="user-menu">
                <a href="#" class="btn-session">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </form>
                </div>
            </div>
        </nav><br><br>

        <section class="filter-container">
            <h2 class="subtitle">VIVIENDAS</h2>
            <form action="{{ route('FiltrarDashboard') }}" method="get" class="filter-form">
                <select name="tipo_propiedad" class="filter-input">
                    <option value="">Tipo de Propiedad</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="finca">Finca</option>
                </select>
                <input type="number" name="precio_min" placeholder="Precio mínimo" class="filter-input">
                <input type="number" name="precio_max" placeholder="Precio máximo" class="filter-input">
                <select name="habitaciones" class="filter-input">
                    <option value="">Habitaciones</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                </select>
                <button type="submit" class="filter-button">Buscar</button>
            </form>
        </section><br><br>

        <section class="property-list">
            @if($properties->isEmpty())
                <p>No hay propiedades disponibles en este momento.</p>
            @else
                @foreach($properties as $property)
                    <div class="property-item">
                        @foreach ($property->images as $image)
                            <img src="{{ asset($image->image_path) }}" alt="Imagen de la propiedad">
                        @endforeach
                        <h3>{{ $property->titulo }}</h3>
                        <p><strong>Dirección:</strong> {{ $property->direccion }}</p>
                        <p><strong>Precio:</strong> ${{ number_format($property->precio, 2) }}</p><br>
                        <b><center><a href="{{ route('propiedad.show', $property->id) }}" class="btn btn-info">Ver más...</a></center></b>
                    </div>
                @endforeach
            @endif
        </section>
    </div>
</body>
</html>
