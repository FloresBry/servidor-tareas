
@props(['columnas' => []])
<table  class="table   table-bordered mx-auto p-2  " style="width: 600px;">
    <thead >
        <tr>
    @foreach ($columnas as $columna)
            <th> {{ $columna }}</th>
  @endforeach
        </tr>
    </thead> 
    <tbody>
        {{ $slot }}
    </tbody>
</table>