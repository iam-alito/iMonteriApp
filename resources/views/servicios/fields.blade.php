<!-- Tipo Servicios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_servicios_id', 'Tipo de Servicio:') !!}
    {!! Form::select('tipo_servicios_id',$datos['tipos'], ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion',$datos['servicios']->descripcion, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor',$datos['servicios']->valor, ['class' => 'form-control']) !!}
</div>

<!-- Icono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icono', 'Icono:') !!}
    {!! Form::text('icono',$datos['servicios']->icono, ['class' => 'form-control']) !!}
    <br>
    <img src="{{$datos['servicios']->icono}}" width="100">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('servicios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
