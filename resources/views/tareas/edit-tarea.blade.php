<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea: Editar</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    @include('form-error')
    <form action="{{ route('tarea.update',$tarea->id) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="{{  old('titulo') ?? $tarea->titulo }}" >
        <br>
        <label for="descripcion">Descripcion:</label>
        <textarea  id="descripcion" name="descripcion"   >{{ old('descripcion') ?? $tarea->descripcion }}</textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>