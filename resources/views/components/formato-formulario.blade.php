<div class="mx-auto p-2 " style="width: 500px;">
<form action="{{ route('alumno.store') }}" method="post">
    @csrf
 {{ $slot }}
 </form>
</div> 