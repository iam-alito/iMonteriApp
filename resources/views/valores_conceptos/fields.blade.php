<!-- Conceptos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conceptos_id', 'Conceptos:') !!}
    {!! Form::select('conceptos_id',$datos['conceptos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('valoresConceptos.index') !!}" class="btn btn-default">Cancel</a>
</div>
