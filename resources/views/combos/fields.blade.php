<!-- Concepto Combo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concepto_combo', 'Concepto Combo:') !!}
    {!! Form::text('concepto_combo', null, ['class' => 'form-control']) !!}
</div>

<!-- Concepto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('concepto_id', 'Concepto Id:') !!}
    {!! Form::select('concepto_id', $datos['conceptos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!! Form::select('estado_id',$datos['estados'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('combos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
