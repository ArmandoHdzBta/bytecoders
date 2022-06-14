<div class="form-group">
    {!! Form::label('nombre', 'Nombre: ') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}
    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Nombre: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug de la etiqueta', 'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('color', 'Nombre: ') !!}
    {!! Form::select('color', $colores, null, ['class' => 'form-control']) !!}
    @error('color')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>