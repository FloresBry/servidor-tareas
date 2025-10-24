
<x-layout>
    <x-slot name="titulo">Detalle del Alumno</x-slot>
    <x-slot name="titulo_encabezado">Detalle del Alumno {{ $alumno->nombre }}</x-slot>
    <x-slot name="titulo_visual">Detalle del Alumno {{ $alumno->nombre }}</x-slot>
    <br>
    <x-card-alumno>
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
    </x-card-alumno>
    <br>
    <x-boton-enlace href="{{ route('alumno.index') }}">
    Volver al listado de Alumnos
    </x-boton-enlace>
</x-layout>