<x-layout>
    <x-slot name="titulo">
        'Gestion de Alumnos'
    </x-slot>
    <x-slot name="titulo_encabezado">
        Gestion de Alumnos
    </x-slot>  
   <x-slot name="titulo_visual">Lista de Alumnos</x-slot>
        <?php
            $columnas = ['ID','Codigo','Nombre','Correo','Acciones'];
        ?>
    <x-table :columnas="$columnas">
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
    </x-table>
    <x-boton-enlace :href="route('alumno.create')">
        Crear Alumno
    </x-boton-enlace>
</x-layout>