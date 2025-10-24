<x-html_estructura>
    <x-encabezado>Editar Tarea {{ $tarea->titulo }}</x-encabezado>
    <x-tamanio_formulario>
    <x-titulo>Editar Tarea</x-titulo>
    <form  action="{{ route('tarea.update',$tarea->id) }}" method="post">
        @csrf
        @method('PATCH')
        <x-titulo_input>{{  old('titulo') ?? $tarea->titulo }}</x-titulo_input>
        @error('titulo')
        <div class="alert alert-danger  py-1">
        {{ $message }}
        </div>
        @enderror 
        <br >
        
        <x-descripcion>{{ old('descripcion') ?? $tarea->descripcion }}</x-descripcion>
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