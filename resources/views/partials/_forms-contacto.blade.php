@csrf 
<hr>
<div class="form-group">
    <label for="name">Ingrese su nombre</label>
    <input 
        id="name"
        type="text" 
        class="form-control bg-light @error('nombre') is-invalid @else border-0 @enderror" 
        name="nombre"  
        value="{{ old('nombre',$contacto->nombre) }}"
        placeholder="Nombre..."
    >
    @error('nombre')
        @include('partials._errors')
    @enderror
    <label>Ingrese su apellido : </label>
    <input
        type="text" 
        class="form-control bg-light @error('apellido') is-invalid @else border-0 @enderror" 
        name="apellido" 
        value="{{ old('apellido',$contacto->apellido) }}"
        placeholder="Apellido..."
    >
    @error('apellido')
        @include('partials._errors')
    @enderror
    <label>Ingrese su direccion : </label>
    <input 
        type="text" 
        class="form-control bg-light @error('direccion') is-invalid @else border-0 @enderror" 
        name="direccion" 
        value="{{ old('direccion',$contacto->direccion) }}"
        placeholder="Direccion..."
    >
    @error('direccion')
        @include('partials._errors')
    @enderror
    <label>Ingrese su cedula de identidad : </label>
    <input 
        type="text" 
        class="form-control bg-light @error('ci') is-invalid @else border-0 @enderror" 
        name="ci" 
        value="{{ old('ci',$contacto->ci) }}"
        placeholder="Cedula de Identidad..."
    >
    @error('ci')
        @include('partials._errors')
    @enderror
    <label>Ingrese su numero de celular : </label>
    <input 
        type="text" 
        class="form-control bg-light @error('celular') is-invalid @else border-0 @enderror" 
        name="celular" 
        value="{{ old('celular',$contacto->celular) }}"
        placeholder="Numero..."
    >
    @error('celular')
        @include('partials._errors')
    @enderror
    <button class="btn btn-primary btn-lg btn-block mt-2">  {{ $btnText }} </button>
</div>