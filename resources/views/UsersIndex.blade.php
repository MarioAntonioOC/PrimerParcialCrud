<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - CRUD Laravel</title>

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
        <h1>Lista de Usuarios Laravel</h1>
        <a class="btn btn-success" href="{{ route('users.create') }}">Agregar Usuario</a>
        <div class="table-responsive">
            <div class="pull-right mb-2">
                
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Editar</a>
                            <a class="btn btn-info" href="{{ route('user.show', $user->id) }}">Detalle</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a class="btn btn-secondary" href="{{ url('/') }}">Regresar a Welcome</a>
        </div>
    </div>

    <!-- Enlazar Bootstrap JS y Popper.js (necesarios para algunas funcionalidades de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
