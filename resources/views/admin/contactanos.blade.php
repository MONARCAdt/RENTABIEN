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

        .container-info {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        .submit-btn {
            background-color: #003366;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #002244;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .contact-info div {
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            width: 48%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .contact-info h3 {
            font-size: 18px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .contact-info p a {
            color: #000;
            text-decoration: none;
        }

        .contact-info p a:hover {
            text-decoration: underline;
        }


    </style>
</head>
<body>
    <div class="container">
        <!-- Nav -->
        <nav class="main-nav">
            <img src="{{ asset('img/INMOBILIARIA__1_-removebg-preview.png') }}" alt="RentaBien Logo" class="logo">    
            <ul class="main-menu">
                <li><a href="{{ route('admin.dashboard') }}">INICIO</a></li>
                <li><a href="{{ route('admin.registrodevivienda') }}">REGISTRO DE VIVIENDA</a></li>
                <li><a href="{{ route('admin.contactanos') }}">CONTACTANOS</a></li>
                <li><a href="{{ route('admin.usuarios') }}">USUARIOS</a></li>
                <li class="settings-menu">
                    <a href="#">AJUSTES</a>
                    <div class="settings-dropdown-menu">
                        <a href="{{ route('admin.edit') }}" class="settings-item">Perfil</a>
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

        <section class="container-info">
            <div class="container-info">
                <center><h2 class="form-title">Formulario de Registro</h2></center>
                <form action="{{route('admin.contactanos.store')}}" method="POST" id="contactForm">
                    @csrf
                    <label for="nombre">Nombre *</label>
                    <input type="text" id="nombre" name="nombre" required>
        
                    <label for="apellido">Apellido *</label>
                    <input type="text" id="apellido" name="apellido" required>
        
                    <label for="telefono">Teléfono *</label>
                    <input type="tel" id="telefono" name="telefono" required>
        
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
        
                    <label for="ciudad">Ciudad *</label>
                    <select id="ciudad" name="ciudad" required>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Cali">Cali</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Yopal">Yopal</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="Leticia">Leticia</option>
                    </select>
                    
        
                    <label for="servicio">Servicio de interés *</label>
                    <select id="servicio" name="servicio" required>
                        <option value="Consignar inmueble">Consignar inmueble</option>
                        <option value="Arrendar inmueble">Arrendar inmueble</option>
                    </select>
        
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje"></textarea>
        
                    <button type="submit" class="submit-btn" onclick="sendToWhatsApp()">ENVIAR</button>
                    <center>@if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif</center>
                </form>
                <script>
                    function sendToWhatsApp() {
                        // Captura los valores de los campos del formulario
                        const nombre = document.getElementById('nombre').value;
                        const apellido = document.getElementById('apellido').value;
                        const telefono = document.getElementById('telefono').value;
                        const email = document.getElementById('email').value;
                        const ciudad = document.getElementById('ciudad').value;
                        const servicio = document.getElementById('servicio').value;
                        const mensaje = document.getElementById('mensaje').value;
                
                        // Formatea el mensaje
                        const whatsappMessage = `Hola, mi nombre es ${nombre} ${apellido}.
                        \nTeléfono: ${telefono}
                        \nEmail: ${email}
                        \nCiudad: ${ciudad}
                        \nServicio de interés: ${servicio}
                        \nMensaje: ${mensaje}`;
                
                        // Reemplaza el número con el número de WhatsApp de destino
                        const whatsappURL = `https://wa.me/573166091919?text=${encodeURIComponent(whatsappMessage)}`;
                
                        // Redirige a WhatsApp
                        window.open(whatsappURL, '_blank');
                    }
                </script>
            </div>                     
        </section>
        
    </div>
</body>
</html>