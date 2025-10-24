@props(['for', 'label', 'tipo' => 'text', 'nombre', 'id', 'valor'])
<div class="col-md-12">
        <label for={{ $for }} class="form-label">{{$label}}</label>
        <input  class="form-control" type={{ $tipo }} id={{ $id }} name={{ $nombre }} value={{ $valor }} >
        <br>
        <x-mensaje-error :mensaje='$mensaje="$nombre"'/>
</div>