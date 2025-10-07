<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>
        @foreach($tareas as $tarea )
        <li>
            ID:{{ $tarea->id }}<strong>{{$tarea->titulo}}</strong><br>
            {{$tarea->descripcion}}
        </li>
        
        @endforeach
    </ul>
</body>
</html>