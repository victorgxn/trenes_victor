<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear tipo de tren</title>
</head>
<body>
    <form action="{{ route('trainTypes.store') }}" method="post">
        @csrf
        <label>Tipo</label>
        <input type="text" name="type">
        <input type="submit" value="Crear">
    </form>
</body>
</html>