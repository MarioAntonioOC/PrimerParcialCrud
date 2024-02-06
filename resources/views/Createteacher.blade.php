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
    </style>
</head>
<body>
    <div class="container">
        <h2>Create Teacher</h2>
        <form action="{{ route('teacher.store') }}" method="POST">
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
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="Direccion" required>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" class="form-control" id="telefono" name="Telefono" required>
            </div>

            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" class="form-control" id="especialidad" name="Especialidad" required>
            </div>

            <div class="form-group">
                <label for="nivelEstudio">NivelEstudio:</label>
                <input type="text" class="form-control" id="nivelEstudio" name="NivelEstudio" required>
            </div>

            <!-- Repite la estructura para los otros campos -->

            <button type="submit" class="btn btn-primary btn-block">Crear Maestro</button>
            <a href="{{ route('teacher.index') }}" class="btn btn-danger btn-block mt-2">Regresar a Maestro</a>

        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del cuerpo del documento para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
