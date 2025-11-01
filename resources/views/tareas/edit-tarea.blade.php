<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar tarea</h1>
    @include('form-error')
    <form method='POST' action="{{ route('tarea.update', $tarea->id) }}">
        @csrf
        @method('PATCH')
        <label for='titulo'>TITULO</label>
        <input 
            type="text" 
            id='titulo' 
            name='titulo' 
            value='{{old('titulo') ?? $tarea->titulo  }}' 
            required
        >
        @error('titulo')
            <div>{{$message}}</div>
        @enderror
        <br>
        <label for='descripcion'>DESCRIPCION</label>
        <textarea 
            id='descripcion' 
            name='descripcion'  
            required
        >
            {{  old('descripcion') ?? $tarea->descripcion }}
        </textarea>
        @error('descripcion')
            <div>{{$message}}</div>
        @enderror
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>