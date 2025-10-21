<x-html_estructura>
    <x-encabezado>
    </x-encabezado>
    <x-titulo>LISTADO</x-titulo>
    <x-formato_tabla>
        <thead class="table-warning">
            <tr >
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col-sm">Acciones</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </x-formato_tabla>
<x-boton_enlace href="{{ route(name: 'tarea.create') }}">
     Crear nueva tarea
</x-boton_enlace>


</x-html_estructura>