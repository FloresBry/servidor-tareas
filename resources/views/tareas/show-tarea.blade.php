<x-layout>
    <x-slot name="titulo">Detalle de la Tarea</x-slot>
    <x-slot name="titulo_encabezado">Detalle de la Tarea {{ $tarea->titulo }}</x-slot>
    <x-slot name="titulo_visual">Detalle de la Tarea {{ $tarea->titulo }}</x-slot>
    <x-card-alumno>
            <h5>
                Tarea: {{ $tarea->id }}
            </h5>
            <p> {{ $tarea->titulo }}</p>
            <p>
                <strong>Descripcion:</strong><br>
                {{ $tarea->descripcion }}
            </p>
    </x-card-alumno>
    <br>
    <x-boton-enlace href="{{ route('tarea.index') }}">
    Tareas
    </x-boton-enlace>
</x-layout>