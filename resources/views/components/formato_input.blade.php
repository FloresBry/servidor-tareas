@props(['for', 'label', 'tipo' => 'text', 'nombre', 'id'])
<div class="col-md-12">
        <label for={{ $for }} class="form-label">{{$label}}</label>
        <input  class="form-control" type={{ $tipo }} id={{ $id }} name={{ $nombre }} value="{{  old($nombre) }}" >
        <br>
        <x-mensaje-error :mensaje='$mensaje="$nombre"'/>
</div>