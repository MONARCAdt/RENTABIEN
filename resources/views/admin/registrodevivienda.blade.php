<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

.menu-btn {
  cursor: pointer;
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 2;
  display: none;
}

.btn {
  cursor: pointer;
  display: inline-block;
  border: 0;
  font-weight: bold;
  padding: 10px 20px;
  background: #262626;
  color: #fff;
  font-size: 15px;;
}

.btn:hover {
  opacity: 0.9;
}

.dark {
  color: #fff;
}

.dark .btn {
  background: #f4f4f4;
  color: #333;
}

/* Showcase */
.showcase {
  width: 100%;
  height: 400px;
  background: url('https://i.ibb.co/zGSDGCL/slide1.png') no-repeat center center/cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: flex-end;
  padding-bottom: 50px;
  margin-bottom: 20px;
}

.showcase h2, .showcase p {
  margin-bottom: 10px;
}

.showcase .btn {
  margin-top: 20px;
}

/* Home cards */
.home-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  margin-bottom: 40px;
}

.home-cards img {
  width: 100%;
  margin-bottom: 20px;
}

.home-cards h3 {
  margin-bottom: 5px;
}

.home-cards a {
  display: inline-block;
  padding-top: 10px;
  color: #0067b8;
  text-transform: uppercase;
  font-weight: bold;
}

.home-cards a:hover i {
  margin-left: 10px;
}

/* Xbox */
.xbox {
  width: 100%;
  height: 350px;
  background: url('https://i.ibb.co/tBJGPD9/xbox.png') no-repeat center center/cover;
  margin-bottom: 20px;
}

.xbox .content {
  width: 40%;
  padding: 50px 0 0 30px;
}

.xbox p, .carbon p {
  margin: 10px 0 20px;
}

/* Carbon */
.carbon {
  width: 100%;
  height: 350px;
  background: url('https://i.ibb.co/72cgtsz/carbon.jpg') no-repeat center center/cover;
}

.carbon .content {
  width: 55%;
  padding: 100px 0 0 30px;
}

/* Follow */
.follow {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin: 30px 0 30px;
}

.follow * {
  margin-right: 10px;
}

/* Links */
.links {
  background: #f2f2f2;
  color: #616161;
  font-size: 12px;
  padding: 35px 0;
}

.links-inner {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 10px;
  align-items: flex-start;
  justify-content: center;
}

.links li {
  line-height: 2.8;
}

/* Footer */
.footer {
  background: #f2f2f2;
  color: #616161;
  font-size: 12px;
  padding: 20px 0;
}

.footer-inner {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px 0 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.footer div {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.footer div i {
  margin-right: 10px;
}

.footer ul {
  display: flex;
  flex-wrap: wrap;
}

.footer li {
  margin-right: 30px;
  margin-bottom: 20px;
}

@media(max-width: 700px) {
  .menu-btn {
    display: block;
  }

  .menu-btn:hover {
    opacity: 0.5;
  }

  .main-nav ul.right-menu {
    margin-right: 50px;
  }

  .main-nav ul.main-menu {
    display: block;
    position: absolute;
    top:0;
    left: 0;
    background: #f2f2f2;
    width: 50%;
    height: 100%;
    border-right: #ccc 1px solid;
    opacity: 0.9;
    padding: 30px;
    transform: translateX(-500px);
    transition: transform 0.5s ease-in-out;
  }

  .main-nav ul.main-menu li {
    padding: 10px;
    border-bottom: #ccc solid 1px;
    font-size: 14px;
  }

  .main-nav ul.main-menu li:last-child {
    border-bottom: 0;
  }

  .main-nav ul.main-menu.show {
    transform: translateX(-20px);
  }

  .home-cards {
    grid-template-columns: repeat(2, 1fr);
  }

  .xbox .content p {
    display: none;
  }

  .xbox .content h2 {
    margin-bottom: 20px;
  }

  .carbon .content {
    width: 85%;
  }

  .links .links-inner {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media(max-width: 500px) {
  .home-cards {
    grid-template-columns: 1fr;
  }

  .links .links-inner {
    grid-template-columns: 1fr;
  }

  .links .links-inner ul {
    margin-bottom: 20px;
  }
}

    /* Estilos generales del formulario */
    .rusia {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input[type="text"],
    form input[type="number"],
    form textarea,
    form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    form input[type="checkbox"] {
        margin-right: 10px;
    }

    form button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #45a049;
    }

    /* Estilo para alinear el formulario y el contenido */
    center {
        margin-top: 50px;
    }

    .rusia {
    display: flex;
    justify-content: space-between;
    max-width: 900px;
    margin: auto;
  }

  .column {
    width: 48%;
  }

  .form-group {
    margin-bottom: 10px;
  }

  .form-group label, 
  .form-group input, 
  .form-group select, 
  .form-group textarea {
    display: block;
    width: 100%;
  }

  button {
    display: block;
    margin: auto;
  }

  /* Responsive: para pantallas más pequeñas */
  @media screen and (max-width: 768px) {
    .rusia {
      flex-direction: column;
    }
    
    .column {
      width: 100%;
    }
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
        </nav>

        <center><h1>Registrar una Nueva Propiedad</h1></center>

        @if ($errors->any())
            <div>
                <strong>Errores:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <center>
          <form class="rusia" action="{{ route('Propety.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
      
              <!-- Column 1: Left side -->
              <div class="column">
                  <div class="form-group">
                      <label for="titulo">Título:</label>
                      <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>
                      @error('titulo')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="descripcion">Descripción:</label>
                      <textarea name="descripcion" id="descripcion" required>{{ old('descripcion') }}</textarea>
                      @error('descripcion')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="direccion">Dirección:</label>
                      <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                      @error('direccion')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="precio">Precio:</label>
                      <input type="number" name="precio" id="precio" step="0.01" value="{{ old('precio') }}" required>
                      @error('precio')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="cuartos">Habitaciones:</label>
                      <input type="number" name="cuartos" id="cuartos" value="{{ old('cuartos') }}" required>
                      @error('cuartos')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
              </div>
      
              <!-- Column 2: Right side -->
              <div class="column">
                  <div class="form-group">
                      <label for="baños">Baños:</label>
                      <input type="number" name="baños" id="baños" value="{{ old('baños') }}" required>
                      @error('baños')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="area">Área (m²):</label>
                      <input type="number" name="area" id="area" value="{{ old('area') }}" required>
                      @error('area')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="estado">Estado:</label>
                      <select name="estado" id="estado" required>
                          <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                          <option value="vendido" {{ old('estado') == 'vendido' ? 'selected' : '' }}>Vendido</option>
                          <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                      </select>
                      @error('estado')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="tipo">Tipo de Vivienda:</label>
                      <select name="tipo" id="tipo" required>
                          <option value="casa" {{ old('tipo') == 'casa' ? 'selected' : '' }}>Casa</option>
                          <option value="apartamento" {{ old('tipo') == 'apartamento' ? 'selected' : '' }}>Apartamento</option>
                          <option value="finca" {{ old('tipo') == 'finca' ? 'selected' : '' }}>Finca</option>
                      </select>
                      @error('tipo')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="amueblado">Amueblado:</label>
                      <select name="amueblado" id="amueblado" required>
                          <option value="si" {{ old('amueblado') == 'disponible' ? 'selected' : '' }}>Si</option>
                          <option value="no" {{ old('amueblado') == 'vendido' ? 'selected' : '' }}>No</option>
                      </select>
                      @error('amueblado')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="garaje">Garaje:</label>
                      <select name="garaje" id="garaje" required>
                          <option value="si" {{ old('garaje') == 'si' ? 'selected' : '' }}>Si</option>
                          <option value="no" {{ old('garaje') == 'no' ? 'selected' : '' }}>No</option>
                      </select>
                      @error('garaje')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div>
      
                  <div class="form-group">
                      <label for="image">Subir Imágenes:</label>
                      <input type="file" name="image[]" id="image" accept="image/*" multiple>
                      @error('image')
                          <small class="error">{{ $message }}</small>
                      @enderror
                      @error('image.*')
                          <small class="error">{{ $message }}</small>
                      @enderror
                  </div><BR>
                  <button type="submit">Registrar Propiedad</button>
              </div>
          </form><br><br>
      
          @if(session('success'))
              <script>
                  // Mostrar alerta con el mensaje de éxito
                  alert("{{ session('success') }}");
              </script>
          @endif
      </center>
              
            
    
</body>
</html>
