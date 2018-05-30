<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $categoriasElementos[0]->id !!}</p>
</div>

<!-- Categorias Id Field -->
<div class="form-group">
    {!! Form::label('categorias_id', 'ID de Categoría:') !!}
    <p>{!! $categoriasElementos[0]->categorias_id !!}</p>
</div>

<!-- Elementos Id Field -->
<div class="form-group">
    {!! Form::label('elementos_id', 'ID de Elemento:') !!}
    <p>{!! $categoriasElementos[0]->elementos_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado a las:') !!}
    <p>{!! $categoriasElementos[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado a las:') !!}
    <p>{!! $categoriasElementos[0]->updated_at !!}</p>
</div>

