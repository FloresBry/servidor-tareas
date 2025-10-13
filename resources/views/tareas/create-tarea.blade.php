<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea: Crear</title>
</head>
<body>
    <h1>Creacion Tarea</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tarea.store') }}" method="post">
        @csrf
        <label for="titulo">Titulo:</label>
        <input 
            type="text" id="titulo" 
            name="titulo" 
            value="{{ old('titulo') }}" >
        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="descripcion">Descripcion:</label>
        <textarea   
            id="descripcion" 
            name="descripcion"  >{{ old('descripcion') }}</textarea>
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>