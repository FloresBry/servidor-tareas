<x-layout>
    <x-slot name="titulo">Listado de Tareas</x-slot>
    <x-slot name="titulo_encabezado">Listado de Tareas</x-slot>
    <x-slot name="titulo_visual">Listado de Tareas</x-slot>
    <x-table :columnas="$columnas=['id','titulo','actiones']">
            @foreach ( $tareas as $tarea )
                <tr class="table-light">
                    <td>{{ $tarea->id }}</td>
                    <td>
                        <a href="{{route('tarea.show',$tarea->id) }}">
                        {{ $tarea->titulo }}
                        </a>
                    </td>
                    <td >
                        <div class="d-grid gap-1 col-4 mx-auto">
                        <a  class="btn btn-primary "href="{{ route('tarea.edit',$tarea->id) }}">Editar</a>
                        <form action="{{ route('tarea.destroy',$tarea->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"type="submit">Eliminar</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
    </x-table>
<x-boton-enlace href="{{ route(name: 'tarea.create') }}">
     Crear nueva tarea
</x-boton-enlace>
</x-layout>