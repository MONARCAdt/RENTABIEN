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

        .table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    text-align: left;
}

.table thead tr {
    background-color: #262626;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.table th,
.table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}

.table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.table tbody tr:last-of-type {
    border-bottom: 2px solid #262626;
}

.table .btn-warning {
    background-color: #ffc107;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.table .btn-warning:hover {
    background-color: #e0a800;
}

.table .btn-danger {
    background-color: #dc3545;
    color: #ffffff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.table .btn-danger:hover {
    background-color: #c82333;
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
        @extends('layouts.app')

        @section('content')
        <div class="container">
            <b><h2 class="subtitle">USUARIOS REGISTRADOS</h2></b><br>
        
            <!-- Formulario de búsqueda -->
            <form method="GET" action="{{ route('usuarios.index') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Buscar por nombre, email o teléfono" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </form><br><br>
        
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center">No se encontraron usuarios.</td>
                        </tr>
                    @else
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                                    </form>
            
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        @endsection
        
    
</body>
</html>
