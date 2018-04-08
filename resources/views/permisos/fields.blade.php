<!-- Modulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modulo', 'Modulo:') !!}
    {!! Form::text('modulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Roles Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roles_id', 'Rol:') !!}
    {!! Form::select('roles_id', $datos['roles'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('permisos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
