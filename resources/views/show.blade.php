<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            text-align: center; /* Centra los elementos del contenedor */
        }

        h2 {
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        .details {
            margin-top: 20px;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn-back, .btn-edit, .btn-delete {
            width: 120px; /* Ajusta el ancho de los botones según tus necesidades */
            margin: 5px;
        }

        .btn-back {
            background-color: #28a745; /* Verde */
        }

        .btn-edit {
            background-color: #007bff; /* Azul */
        }

        .btn-delete {
            background-color: #dc3545; /* Rojo */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalles del Estudiante</h2>
        
        <div class="details">
            <label>Nombre:</label>
            <p>{{ $student->Nombre }}</p>

            <label>Apellidos:</label>
            <p>{{ $student->Apellidos }}</p>

            <label>Dirección:</label>
            <p>{{ $student->Direccion }}</p>

            <label>Teléfono:</label>
            <p>{{ $student->Telefono }}</p>

            <label>Email:</label>
            <p>{{ $student->Email }}</p>
        </div>

        <div class="btn-container">
            <a href="{{ route('students.index') }}" class="btn btn-back">Regresar</a>
            <a class="btn btn-edit" href="{{ route('students.edit',$student->id) }}">Editar</a>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete">Eliminar</button>
            </form>
        </div>
    </div>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
