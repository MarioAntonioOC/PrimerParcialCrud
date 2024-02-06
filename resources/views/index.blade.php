<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1: CRUD Laravel</title>

    <!-- Enlazar Bootstrap desde CDN (puedes reemplazarlo por la versión descargada) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            padding: 20px; /* Ajustar según tus necesidades */
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Estudiantes Laravel 9</h1>

        <div class="table-responsive">
        <div class="pull-right mb-2">
         <a class="btn btn-success" href="{{ route('students.create') }}"> Agregar Estudiantes</a>
        </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->Nombre}}</td>
                            <td>{{$student->Apellidos}}</td>
                            <td>{{$student->Direccion}}</td>
                            <td>{{$student->Telefono}}</td>
                            <td>{{$student->Email}}</td>
                            <td>
                            <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('students.edit',$student) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Enlazar Bootstrap JS y Popper.js (necesarios para algunas funcionalidades de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
