<x-layout>
    <x-slot name="titulo">
        'Gestion de Alumnos'
    </x-slot>
    <x-slot name="titulo_encabezado">
        Gestion de Alumnos
    </x-slot>  
   <x-titulo>Lista de Alumnos</x-titulo>
    <x-formato_tabla>
        <thead class="table-warning">
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
                <tr class="table-light">
                    <td>{{ $alumno->id }}</td>
                    <td><a href="{{ route('alumno.show',$alumno->id) }}">{{ $alumno->codigo }}</a></td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td><a  class="btn btn-primary" href="{{ route('alumno.edit',$alumno->id) }}">Editar</a>
                        <form action="{{ route('alumno.destroy',$alumno->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </x-formato_tabla>
    <x-boton_enlace href="{{ route('alumno.create') }}">
        Crear Alumno
    </x-boton_enlace>
</x-layout>