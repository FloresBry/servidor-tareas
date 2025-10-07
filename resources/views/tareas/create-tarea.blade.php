<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea: Crear</title>
</head>
<body>
    <h1>Creacion Tarea</h1>
    <form action="{{ route('tarea.store') }}" method="post">
        @csrf
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="descripcion">Descripcion:</label>
        <textarea  id="descripcion" name="descripcion" required></textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>