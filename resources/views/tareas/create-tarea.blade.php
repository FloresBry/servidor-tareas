<x-html_estructura>
    <x-Encabezado>Creacion Tarea</x-Encabezado>
    <x-tamanio_formulario>
    <x-titulo>Crea tu tarea</x-titulo>
    <form action="{{ route('tarea.store') }}" method="post">
        @csrf
        <x-titulo_input>{{ old('titulo') }}</x-titulo_input>
        @error('titulo')
        <div class="alert alert-danger  py-1">
        {{ $message }}
        </div>
        @enderror   
        <br>
        <x-descripcion>{{ old('descripcion') }}</x-descripcion>
        @error('descripcion')
        <div class="alert alert-danger  py-1">
        {{ $message }}
        </div>
        @enderror  
        <br>
        <x-boton_guardar/>
    </form>
    </x-tamanio_formulario>
</x-html_estructura>
