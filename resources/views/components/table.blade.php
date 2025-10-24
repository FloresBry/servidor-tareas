<table  class="table   table-bordered mx-auto p-2  " style="width: 600px;">
    <thead class="text-white">
    @foreach({{$columnas }} as $columna)
        <th>$columna</th>
    @endforeach
    
    </thead> 
    <tbody>
        {{ $slot }}
    </tbody>
</table>