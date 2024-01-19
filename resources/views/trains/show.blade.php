<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show - Tren</title>
</head>
<body>
    <h1>Tren</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Pasajeros</th>
                <th>Año de creacion</th>
                <th>Tipo de tren</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $train->name }}</td>
                <td>{{ $train->passengers }}</td>
                <td>{{ $train->year }}</td>
                <td>{{ $train->train_type->type }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>