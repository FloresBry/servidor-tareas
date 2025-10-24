
<x-layout>
    <x-slot name="titulo">Editar Alumno {{ $alumno->nombre }}</x-slot>
    <x-slot name="titulo_encabezado">Editar Alumno {{ $alumno->nombre }}</x-slot>
    <x-slot name="titulo_visual">Editar Alumno {{ $alumno->nombre }}</x-slot>
<x-formato-formulario :action="$action='alumno.update'" :parametro="$alumno->id">
        @method('PATCH')
        <x-formato_input :for="$for='codigo'" :label="$label='Codigo'" :tipo='$tipo="text"' :id='$id="codigo"' :nombre='$nombre="codigo"' :valor="old('codigo') ?? $alumno->codigo"/>
        <x-formato_input :for="$for='nombre'" :label="$label='Nombre'" :tipo='$tipo="text"' :id='$id="nombre"' :nombre='$nombre="nombre"' :valor="old('nombre') ?? $alumno->nombre"/>
        <x-formato_input :for="$for='correo'" :label="$label='Correo'" :tipo='$tipo="email"' :id='$id="correo"' :nombre='$nombre="correo"' :valor="old('correo') ?? $alumno->correo"/>
        <x-formato_input :for="$for='fecha_nacimiento'" :label="$label='Fecha de Nacimiento'" :tipo='$tipo="date"' :id='$id="fecha_nacimiento"' :nombre='$nombre="fecha_nacimiento"' :valor="old('fecha_nacimiento') ?? $alumno->fecha_nacimiento"/>
        <x-formato_input :for="$for='sexo'" :label="$label='Sexo'" :tipo='$tipo="text"' :id='$id="sexo"' :nombre='$nombre="sexo"' :valor="old('sexo') ?? $alumno->sexo"/>
        <x-formato_input :for="$for='carrera'" :label="$label='Carrera'" :tipo='$tipo="text"' :id='$id="carrera"' :nombre='$nombre="carrera"' :valor="old('carrera') ?? $alumno->carrera"/>
</x-formato-formulario>
</x-layout>