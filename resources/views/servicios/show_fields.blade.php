<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!!$servicios[0]->id !!}</p>
</div>

<!-- Tipo Servicios Id Field -->
<div class="form-group">
    {!! Form::label('tipo_servicios_id', 'Tipo de Servicio:') !!}
    <p>{!! $servicios[0]->tipo_servicios_id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{!! $servicios[0]->descripcion !!}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{!! $servicios[0]->valor !!}</p>
</div>

<!-- Icono Field -->
<div class="form-group">
    {!! Form::label('icono', 'Icono:') !!}
    <img src="{{$servicios[0]->icono}}" width="100">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado a las:') !!}
    <p>{!! $servicios[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado a las:') !!}
    <p>{!! $servicios[0]->updated_at !!}</p>
</div>

