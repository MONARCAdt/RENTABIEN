<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        h1 {
            color: #0056b3;
        }
        p {
            margin: 5px 0;
        }
        .container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Información de Contacto</h1>
        <p><strong>Nombre:</strong> {{ $data['nombre'] }} {{ $data['apellido'] }}</p>
        <p><strong>Teléfono:</strong> {{ $data['telefono'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Ciudad:</strong> {{ $data['ciudad'] }}</p>
        <p><strong>Servicio de interés:</strong> {{ $data['servicio'] }}</p>
        <p><strong>Mensaje:</strong> {{ $data['mensaje'] }}</p>
    </div>
</body>
</html>
