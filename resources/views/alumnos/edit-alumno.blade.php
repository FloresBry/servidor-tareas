@php
    $titulo="Editar Alumno ".$alumno->nombre;
    $rutas_Alumnos=[
        ['ruta'=>'alumno.index','etiqueta'=>'Listado de Alumnos'],
        ['ruta'=>'alumno.create','etiqueta'=>'Crear Alumno']
    ];
@endphp
<x-html_estructura>
<x-encabezado :name="$titulo" :rutas="$rutas_Alumnos"/>
<x-tamanio_formulario>
    <x-titulo>Editar Alumno</x-titulo>
    @include('form-error')
    <form action="{{ route('alumno.update',$alumno->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="col-md-12">
        <label for="codigo" class="form-label">Codigo:</label>
        <input  class="form-control" type="text" id="codigo" name="codigo" value="{{  old('codigo') ?? $alumno->codigo }}" >
        <br>
        @error('codigo')
            <div class="alert alert-danger">{{ $message }}</div>    
        @enderror
        </div>
        <div class="col-md-12">
        <label for="nombre" class="form-label">Nombre:</label>
        <input class="form-control" type="text" id="nombre" name="nombre" value="{{  old('nombre') ?? $alumno->nombre }}" >
        <br>
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-md-12">
        <label for="correo" class="form-label">Correo:</label>
        <input class="form-control" type="email" id="correo" name="correo" value="{{  old('correo') ?? $alumno->correo }}" >
        <br>
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="col-md-12">
        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
        <input class="form-control"  type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{  old('fecha_nacimiento') ?? $alumno->fecha_nacimiento }}" >
        <br>
        @error('fecha_nacimiento')
            <div class="alert alert-danger">{{ $message }}</div>    
        @enderror
        </div>
        <div class="col-md-12">
        <label for="sexo" class="form-label">Sexo:</label>
        <input class="form-control" type="text" id="sexo" name="sexo" value="{{  old('sexo') ?? $alumno->sexo }}" >
        <br>
        @error('sexo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        </div>
        <div class="col-md-12">  
        <label for="carrera" class="form-label">Carrera:</label>
        <input class="form-control" type="text" id="carrera" name="carrera" value="{{  old('carrera') ?? $alumno->carrera }}" >
        <br>
        @error('carrera')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <x-boton_guardar/>
    </form>
</x-tamanio_formulario>
</x-html_estructura>