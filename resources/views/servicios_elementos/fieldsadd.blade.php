<!-- Servicios Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicios_id', 'Servicios Id:') !!}
    {!! Form::select('servicios_id',$datos['servicios'], null, ['class' => 'form-control']) !!}
</div>

<!-- Elementos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('elementos_id', 'Elementos Id:') !!}
    {!! Form::select('elementos_id',$datos['elementos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('serviciosElementos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
