<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $categorias[0]->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{!! $categorias[0]->descripcion !!}</p>
</div>

<!-- Icono Field -->
<div class="form-group">
    {!! Form::label('icono', 'Icono:') !!}
    <p><img src="{{$categorias[0]->icono}}" width="300"></p>
</div>

<div class="form-group">
    {!! Form::label('elementos_id', 'Elementos:') !!}
@foreach($categorias as $elementos)
    <p>{!! $elementos->elementos_id !!}</p>
@endforeach
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado a las:') !!}
    <p>{!! $categorias[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado a las:') !!}
    <p>{!! $categorias[0]->updated_at !!}</p>
</div>

