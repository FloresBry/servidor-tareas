<x-mi-layout>
    <x-encabezado-clase>
    <h1>Crear tarea</h1>
    </x-encabezado-clase>
    <x-form-error/>

    <form method="POST" action='{{ route('tarea.store') }}'>
        @csrf
        <div class="mb-3">
        <label  class="form-label" for='titulo'>Titulo</label>
        <input class="form-control" type="text" 
            id='titulo' 
            name='titulo' 
            value='{{old('titulo')  }}'
            required
        >
        @error('titulo')
            <div class='alert alert-danger'>{{ $message }}</div>
        @enderror
        </div>
        <br>
        <label for='descripcion'>Descripcion</label>
        <textarea id='descripcion' name='descripcion' required>{{old('descripcion')}}</textarea>
        @error('descripcion')
            <div class='alert alert-danger'>{{$message}}</div>
        @enderror
        <br>
        <button type="submit">Guardar</button>
    </form>
</x-mi-layout>
