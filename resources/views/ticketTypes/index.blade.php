<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de tickets</title>
</head>
<body>
    <h1>Todos los tipos de tickets</h1>
    <a href="{{route('ticketTypes.create')}}">Crear tipo de Tren</a>
    <table>
        <thead>
            <tr>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticketTypes as $type)
                <tr>
                    <td>{{ $type->type }}</td>
                    <td>
                        <form action="{{ route('ticketTypes.show', ['ticketType' => $type->id]) }}">
                            <input type="submit" value="Ver">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>