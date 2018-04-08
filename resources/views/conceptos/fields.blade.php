<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Conceptos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_conceptos_id', 'Tipo Conceptos:') !!}
    {!! Form::select('tipo_conceptos_id',$datos['tipos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado:') !!}
    {!! Form::select('estado_id',$datos['estados'], null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6" style="display: none;">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::text('users_id',Auth::id(), ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('conceptos.index') !!}" class="btn btn-default">Cancel</a>
</div>
