<!-- Roles Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roles_id', 'Rol:') !!}
    {!! Form::select('roles_id',$datos['roles'], null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Usuarios:') !!}
    {!! Form::select('users_id',$datos['users'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usuariosRols.index') !!}" class="btn btn-default">Cancelar</a>
</div>
