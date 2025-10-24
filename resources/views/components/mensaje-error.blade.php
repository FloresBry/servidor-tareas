@props(['mensaje'])
<div class="col-md-12">
        @error($mensaje)
            <div class="alert alert-danger">{{ $message }}</div>    
        @enderror 
</div>