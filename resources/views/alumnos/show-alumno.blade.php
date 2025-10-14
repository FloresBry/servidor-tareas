<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Tarea</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{ route('alumno.index') }}">Alumnos</a>
        </li>
    </ul>
    <h1>Alumno: <h3><italic>{{ $alumno->codigo }}</italic></h3></h1>
    <p>
        <strong>Nombre:</strong><br>
        {{ $alumno->nombre }}<br>
        <strong>Correo:</strong><br>
        {{ $alumno->correo }}<br>
        <strong>Fecha de Nacimiento:</strong><br>
        {{ $alumno->fecha_nacimiento }}<br>
        <strong>Sexo:</strong><br>
        {{ $alumno->sexo }}<br> 
        <strong>Carrera:</strong><br>
        {{ $alumno->carrera }}

    </p>
</body>
</html>