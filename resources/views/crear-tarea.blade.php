<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Tarea</h1>
    <form action="{{ route('tarea.store') }}" method="post">
        @csrf
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo"><br><br><br>
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion"  name="descripcion"></textarea>
        <br><br><br>
        <button type="submit">Crear Tarea</button>

    </form>
</body>
</html>
