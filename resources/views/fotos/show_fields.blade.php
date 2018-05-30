<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $fotos[0]->id !!}</p>
</div>

<!-- Elementos Id Field -->
<div class="form-group">
    {!! Form::label('elementos_id', 'Elemento:') !!}
    <p>{!! $fotos[0]->elementos_id !!}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{$fotos[0]->foto}}" width="100"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado a las:') !!}
    <p>{!! $fotos[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado a las:') !!}
    <p>{!! $fotos[0]->updated_at !!}</p>
</div>

