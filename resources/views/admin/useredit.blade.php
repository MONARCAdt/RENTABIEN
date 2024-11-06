<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/INMOBILIARIA-removebg-preview.png') }}" type="image/png">
    <title>Inmobiliaria RentaBien - Ajustes</title>
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

        .menu-btn {
          cursor: pointer;
          position: absolute;
          top: 20px;
          right: 30px;
          z-index: 2;
          display: none;
        }

        .btn-session {
          cursor: pointer;
          display: inline-block;
          border: 0;
          font-weight: bold;
          padding: 10px 20px;
          background: #ffffff;
          color: #000000; /* Cambia el color del texto a negro */
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

        /* Ajustes */
        .settings-container {
            margin: 40px auto;
            padding: 20px;
            max-width: 800px;
            background-color: #f9f9f9;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        .settings-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .settings-section {
            margin-bottom: 30px;
        }

        .settings-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
        }

        .settings-section p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .settings-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .settings-button {
            padding: 10px 20px;
            background-color: #2091F9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .settings-button:hover {
            background-color: #0073e6;
        }

        .settings-note {
            font-size: 12px;
            color: #666;
        }

        .form-error {
            color: red;
            font-size: 12px;
            margin-bottom: 10px;
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


        .container {
            max-width: 1100px;
            margin: 20px auto;
        }

        .settings-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 40px;
        }

        .settings-container h2 {
            font-size: 28px;
            color: #2091F9;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            width: 100%;
        }

        .form-control:focus {
            border-color: #2091F9;
            box-shadow: 0px 0px 8px rgba(32, 145, 249, 0.2);
        }

        .btn-primary {
            background-color: #2091F9;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0073e6;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            margin-left: 10px;
            cursor: pointer;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .settings-note {
            font-size: 12px;
            color: #666;
            text-align: center;
            margin-top: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }

    </style>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars fa-2x"></i>
    </div>

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
                  <!-- Formulario de cierre de sesión -->
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">
                      @csrf
                      <!-- Enlace para enviar el formulario -->
                      <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                  </form>
              </div>
          </div>
        </nav><br><br>

        <!-- Contenedor de ajustes -->
<!-- Contenedor de ajustes -->
<div class="settings-container">
  <h2>Ajustes de la cuenta</h2>

  <!-- Formulario para actualizar la información del usuario -->
  <form method="POST" action="{{ route('profile.update') }}">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Editar Usuario</h2>
        
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>
    
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
            </div><br>
    
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    @endsection
    
      </div>
  </form>

  <p class="settings-note">Nota: Por favor, asegúrate de guardar los cambios en cada sección antes de pasar a la siguiente.</p>
</div>
  </div>
</body>
</html>
