@props(['action', 'parametro'=>null])
<div class="mx-auto p-2 " style="width: 500px;">
<form action="{{ route($action,  $parametro ) }}" method="post">
    @csrf
 {{ $slot }}
 <x-boton_guardar/>
 </form>
</div> 