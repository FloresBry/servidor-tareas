<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index  Alumno</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <ul>
        <li>
            <a href="{{ route('alumno.create') }}">Crear Alumno</a>
        </li>
    </ul>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $alumnos as $alumno )
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td><a href="{{ route('alumno.show',$alumno->id) }}">{{ $alumno->codigo }}</a></td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td><a href="{{ route('alumno.edit',$alumno->id) }}">Editar</a>
                        <form action="{{ route('alumno.destroy',$alumno->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
</body>
</html>