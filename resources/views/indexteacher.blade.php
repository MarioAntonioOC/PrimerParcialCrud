<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1: CRUD Laravel</title>
</head>
<body>
    <div>
        <h1>Lista de Maestro Laravel 9</h1>
    </div>
    <div>
        <table> 
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Especialidad</th>
                <th>NivelEstudio</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>