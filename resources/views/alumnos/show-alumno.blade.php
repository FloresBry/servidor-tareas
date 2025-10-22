@php
    $titulo="Detalle del Alumno ".$alumno->nombre;
    $rutas_Alumnos=[
        ['ruta'=>'alumno.index','etiqueta'=>'Listado de Alumnos'],
        ['ruta'=>'alumno.create','etiqueta'=>'Crear Alumno']
    ];
@endphp
<x-html_estructura>
    <x-encabezado :title="$titulo" :rutas="$rutas_Alumnos"/>
    <br>
    <x-titulo>DETALLE DEL ALUMNO</x-titulo>
    <br>
    <div class="card mx-auto text-bg-danger border-warning  " style="max-width: 220px">
        <div class="card-body">
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
    </div>
</div>
    <br>
    <x-boton_enlace href="{{ route('alumno.index') }}">
    Volver al listado de Alumnos
    </x-boton_enlace>
</x-html_estructura>