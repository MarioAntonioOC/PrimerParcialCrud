<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1: CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h1>Lista de Maestro Laravel 9</h1>
    </div>
    <div class="pull-right mb-2">
    <a class="btn btn-success" href="{{ route('teacher.create') }}"> Agregar Maestro</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped"> 
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Especialidad</th>
                <th>NivelEstudio</th>
                <th>Action</th>
                <tr></tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->Nombre}}</td>
                    <td>{{$teacher->Apellidos}}</td>
                    <td>{{$teacher->Direccion}}</td>
                    <td>{{$teacher->Telefono}}</td>
                    <td>{{$teacher->Especialidad}}</td>
                    <td>{{$teacher->NivelEstudio}}</td>
                    <td>
                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary" href="{{ route('teacher.show', $teacher->id) }}">Detalles</a>
                        <a class="btn btn-primary" href="{{ route('teacher.edit', $teacher->id) }}">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
    </div>
    <div class="mt-4">
            <a class="btn btn-secondary" href="{{ url('/') }}">Regresar a Welcome</a>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>