<!-- Categorias Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorias_id', 'Categoría:') !!}
    {!! Form::select('categorias_id', $datos['categorias'], null, ['class' => 'form-control']) !!}
</div>

<!-- Elementos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('elementos_id', 'Elemento:') !!}
    {!! Form::select('elementos_id',$datos['elementos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categoriasElementos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
