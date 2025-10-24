<x-layout>
    <x-slot name="titulo">Creacion Tarea</x-slot>
    <x-slot name="titulo_encabezado">Creacion Tarea</x-slot>
    <x-slot name="titulo_visual">Creacion Tarea</x-slot>
    <x-formato-formulario :action="$action='tarea.store'">
        <x-formato_input :for="$for='titulo'" :label="$label='Titulo'" :tipo='$tipo="text"' :id='$id="titulo"' :nombre='$nombre="titulo"' :valor="old('titulo')"/>
        <x-descripcion>{{ old('descripcion') }}</x-descripcion>
        @error('descripcion')
        <div class="alert alert-danger  py-1">
        {{ $message }}
        </div>
        @enderror  
        <br>
    </x-formato-formulario>
</x-layout>
