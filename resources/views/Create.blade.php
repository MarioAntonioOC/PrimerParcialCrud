<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    
    <!-- Agrega el enlace al archivo de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        /* Añade estilos personalizados aquí */

        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            border: 1px solid #dee2e6; /* Añade un borde al contenedor del formulario */
            border-radius: 5px; /* Añade esquinas redondeadas */
            padding: 20px; /* Añade espacio interno */
            background-color: #ffffff; /* Fondo blanco para el formulario */
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .logo {
            width: 100px; /* Ajusta el tamaño de la imagen según sea necesario */
            height: auto;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff; /* Color del texto del menú */
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="ruta/al/logo.png" alt="Logo UTRNG" class="logo">
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Programas Académicos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
</div>
    <div class="container">
        <h2>Create student</h2>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="Nombre" required>
            </div>
            <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="Apellidos" required>
        </div>

        <div class="form-group">
            <label for="nombre">Direccion:</label>
            <input type="text" class="form-control" id="nombre" name="Nombre" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Telefono:</label>
            <input type="text" class="form-control" id="apellidos" name="Apellidos" required>
        </div>
        <div class="form-group">
            <label for="nombre">Email:</label>
            <input type="text" class="form-control" id="nombre" name="Nombre" required>
        </div>

            <!-- Repite la estructura para los otros campos -->
            <a href="{{ route('students.store') }}" class="btn btn-primary btn-block">Crear Estudiante</a>
            <a href="{{ route('students.index') }}" class="btn btn-danger btn-block mt-2">Regresar a Estudiante</a>

        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del cuerpo del documento para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
