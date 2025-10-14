<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea: Editar</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    @include('form-error')
    <form action="{{ route('alumno.update',$alumno->id) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="codigo">Codigo:</label>
        <input type="text" id="codigo" name="codigo" value="{{  old('codigo') ?? $alumno->codigo }}" >
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{  old('nombre') ?? $alumno->nombre }}" >
        <br>
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{  old('correo') ?? $alumno->correo }}" >
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{  old('fecha_nacimiento') ?? $alumno->fecha_nacimiento }}" >
        <br>
        <label for="sexo">Sexo:</label>
        <input type="text" id="sexo" name="sexo" value="{{  old('sexo') ?? $alumno->sexo }}" >
        <br>
        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" value="{{  old('carrera') ?? $alumno->carrera }}" >
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>