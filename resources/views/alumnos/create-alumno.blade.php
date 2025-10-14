<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno: Crear</title>
</head>
<body>
    <h1>Creacion Alumno</h1>
    @include('form-error')
    <form action="{{ route('alumno.store') }}" method="post">
        @csrf
        <label for="codigo">Codigo:</label>
        <input 
            type="text" id="codigo" 
            name="codigo" 
            value="{{ old('codigo') }}" >
        @error('codigo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="nombre">Nombre:</label>
        <input 
            type="text" id="nombre" 
            name="nombre" 
            value="{{ old('nombre') }}" >
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="correo">Correo:</label>
        <input 
            type="email" id="correo" 
            name="correo" 
            value="{{ old('correo') }}" >
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input 
            type="date" id="fecha_nacimiento" 
            name="fecha_nacimiento" 
            value="{{ old('fecha_nacimiento') }}" >
        @error('fecha_nacimiento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="sexo">Sexo:</label>
        <input 
            type="text" id="sexo" 
            name="sexo" 
            value="{{ old('sexo') }}" >
        @error('sexo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="carrera">Carrera:</label>
        <input 
            type="text" id="carrera" 
            name="carrera" 
            value="{{ old('carrera') }}" >
        @error('carrera')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Guardar</button>
</body>
</html>