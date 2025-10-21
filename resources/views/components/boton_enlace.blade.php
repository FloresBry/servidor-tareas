@props(['href'=>'#'])
<div class="d-grid gap-2 col-3 mx-auto">
        
    <button  class="btn btn-primary " onclick="window.location.href='{{ $href }}'"{{ $attributes }}>
        {{ $slot }}
    </button>
        
</div>