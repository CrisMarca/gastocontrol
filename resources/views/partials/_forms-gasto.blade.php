@csrf
<hr>
<div class="form-group">
    <label for="name">Nombre de Gasto : </label>
    <input 
        id="name"
        type="text" 
        class="form-control bg-light @error('nombre_g') is-invalid @else border-0 @enderror" 
        name="nombre_g" 
        value="{{ old('nombre_g',$gasto->nombre_g) }}"
        placeholder="Nombre...">
    @error('nombre_g')
        @include('partials._errors')
    @enderror    
    <label for="description">Descripcion de Gasto : </label>
    <input 
        type="text" 
        class="form-control bg-light @error('descripcion_g') is-invalid @else border-0 @enderror" 
        name="descripcion_g" 
        value="{{ old('descripcion_g',$gasto->descripcion_g) }}"
        placeholder="Descripcion...">
    @error('descripcion_g')
        @include('partials._errors')
    @enderror  
    <label for="date">Fecha del Gasto : </label>
    <input 
        type="date" 
        class="form-control bg-light @error('fecha_g') is-invalid @else border-0 @enderror" 
        name="fecha_g" 
        value="{{ old('fecha_g',$gasto->fecha_g) }}">
    @error('fecha_g')
        @include('partials._errors')
    @enderror  
    <label for="mount">Monto del Gasto : </label>
    <input 
        type="text" 
        class="form-control bg-light @error('monto_g') is-invalid @else border-0 @enderror" 
        name="monto_g" 
        value="{{ old('monto_g',$gasto->monto_g) }}"
        placeholder="Monto...">
    @error('monto_g')
        @include('partials._errors')
    @enderror  
    <button class="btn btn-primary btn-lg btn-block mt-2">{{ $btnText }} Gasto</button>
</div>