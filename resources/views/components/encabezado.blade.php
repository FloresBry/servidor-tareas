

@props([ 'rutas'=> [] ,
          'title'=> 'Gestion'])
          
<nav class="navbar" style="background-color: #e3f2fd;" data-bs-theme="light">
<a class="navbar-brand" > <span class="navbar-toggler-icon"></span>{{ $title }}</a>

<ul class="nav">
  @foreach ($rutas as $ruta_unica )
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route($ruta_unica['ruta']) }}">{{ $ruta_unica['etiqueta'] }}</a>
  </li>
  @endforeach

</ul>

</nav>


