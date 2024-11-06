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
            background: #fff;
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

        .btn {
            cursor: pointer;
            display: inline-block;
            border: 0;
            font-weight: bold;
            padding: 10px 20px;
            background: #262626;
            color: #fff;
            font-size: 15px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .property-details {
            display: flex;
            flex-direction: column; /* Cambiado a columna */
            margin-top: 20px;
        }

        .property-details img {
            width: 100%; /* Ajustar el tamaño de la imagen */
            max-width: 400px; /* Establecer un ancho máximo para que no sea demasiado grande */
            height: auto;
            border-radius: 5px;
            margin-bottom: 20px; /* Espacio entre la imagen y el texto */
            transition: transform 0.3s ease; /* Transición suave para el efecto de agrandamiento */
        }

        .property-details img:hover {
            transform: scale(1.1); /* Aumenta el tamaño de la imagen al pasar el mouse */
        }

        .property-info {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            flex: 1; /* Para que el texto ocupe el espacio restante */
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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


        /*Menu Ajustes*/
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
                      <!-- Formulario de cierre de sesión -->
                      <form id="logout-form" method="POST" action="{{ route('logout') }}">
                          @csrf
                          <!-- Enlace para enviar el formulario -->
                          <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                      </form>
                  </div>
              </div>
        </nav>

        <div class="property-details">
            @foreach ($property->images as $image)
                <img src="{{ asset($image->image_path) }}" alt="Imagen de la propiedad">
                @break <!-- Solo muestra la primera imagen -->
            @endforeach
            <div class="property-info">
                <b><h3>{{ $property->titulo }}</h3></b>
                <p>{{ $property->descripcion }}</p>
                <p><strong>Dirección:</strong> {{ $property->direccion }}</p>
                <p><strong>Precio:</strong> ${{ number_format($property->precio, 2) }}</p>
                <p><strong>Habitaciones:</strong> {{ $property->cuartos }}</p>
                <p><strong>Baños:</strong> {{ $property->baños }}</p>
                <p><strong>Área:</strong> {{ $property->area }} m²</p>
                <p><strong>Amueblado:</strong> {{ $property->amueblado ? 'Sí' : 'No' }}</p>
                <p><strong>Garaje:</strong> {{ $property->garaje ? 'Sí' : 'No' }}</p>

                <h3>Contactar al propietario</h3>
                <form action="/contactar-propietario" method="POST">
                    @csrf
                    <input type="hidden" name="property_id" value="{{ $property->id }}">
                    <div class="form-group">
                        <label for="name">Tu nombre:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Tu email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje:</label>
                        <textarea name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div><br><br>
    
</body>
</html>
