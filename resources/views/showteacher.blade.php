<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Profesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Añade estilos personalizados aquí */

        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            background-color: #ffffff;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        .details {
            margin-top: 20px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-back {
            flex: 1;
            margin: 0 5px;
        }

        .btn-edit,
        .btn-delete {
            flex: 1;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalles del Profesor</h2>
        
        <div class="details">
            <label>Nombre:</label>
            <p>{{ $teacher->Nombre }}</p>

            <label>Apellidos:</label>
            <p>{{ $teacher->Apellidos }}</p>

            <label>Dirección:</label>
            <p>{{ $teacher->Direccion }}</p>

            <label>Teléfono:</label>
            <p>{{ $teacher->Telefono }}</p>

            <label>Especialidad:</label>
            <p>{{ $teacher->Especialidad }}</p>

            <label>Nivel de Estudio:</label>
            <p>{{ $teacher->NivelEstudio }}</p>
        </div>

        <div class="btn-group">
            <a href="{{ route('teacher.index') }}" class="btn btn-primary btn-back">Regresar a Profesores</a>
            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-edit">Editar</a>
            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger btn-delete">Eliminar</button>
            </form>  
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap al final del cuerpo del documento para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
