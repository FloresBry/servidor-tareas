<x-html_estructura>
<!-- Creamos codigo php para poder reutilizar el encabezado -->
    @php
        $titulo="Gestion de Alumnos";
        $rutas_Alumnos=[
            ['ruta'=>'alumno.index','etiqueta'=>'Listado de Alumnos'],
            ['ruta'=>'alumno.create','etiqueta'=>'Crear Alumno']
        ];
    @endphp
    <x-encabezado :title="$titulo" :rutas="$rutas_Alumnos"/>  
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

    </x-html_estructura>
    <x-boton_enlace href="{{ route('alumno.create') }}">
        Crear Alumno

    </x-boton_enlace>
    
</x-html_estructura>