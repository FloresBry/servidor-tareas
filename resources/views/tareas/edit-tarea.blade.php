<x-layout>
    <x-slot name="titulo">Editar Tarea</x-slot>
    <x-slot name="titulo_encabezado">Editar Tarea {{ $tarea->titulo }}</x-slot>
    <x-slot name="titulo_visual">Editar Tarea {{ $tarea->titulo }}</x-slot>
    <x-formato-formulario  :action="$action='tarea.update'" :parametro="$tarea->id">
        @method('PATCH')
        <x-formato_input :for="$for='titulo'" :label="$label='Titulo'" :tipo='$tipo="text"' :id='$id="titulo"' :nombre='$nombre="titulo"' :valor="old('titulo') ?? $tarea->titulo"/>
        <x-descripcion>{{ old('descripcion') ?? $tarea->descripcion }}</x-descripcion>
        @error('descripcion')
        <div class="alert alert-danger  py-1">
        {{ $message }}
        </div>
        @enderror 
        <br>
    </x-formato-formulario>
</x-layout>