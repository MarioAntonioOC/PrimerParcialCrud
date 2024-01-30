<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 1: CRUD Laravel</title>
</head>
<body>
    <div>
        <h1>Lista de Estuduantes Laravel 9</h1>
    </div>
    <div>
        <table> 
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <tr></tr>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>