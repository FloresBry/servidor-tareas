
 
<nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
<a class="navbar-brand" > <span class="navbar-toggler-icon"></span>{{ $titulo_encabezado }}</a>

<ul class="nav">
  
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('alumno.index') }}">Ver Alumnos</a>
  </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{ route('alumno.create') }}">Crear Alumno</a>
    </li>
</ul>

</nav>
