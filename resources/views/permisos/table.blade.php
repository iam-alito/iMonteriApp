<table class="table table-responsive" id="permisos-table">
    <thead>
        <tr>
            <th>Modulo</th>
        <th>Descripcion</th>
        <th>Rol</th>
        <th>Creado por</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permisos as $permisos)
        <tr>
            <td>{!! $permisos->modulo !!}</td>
            <td>{!! $permisos->descripcion !!}</td>
            <td>{!! $permisos->roles_id !!}</td>
            <td>{!! $permisos->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['permisos.destroy', $permisos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permisos.show', [$permisos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permisos.edit', [$permisos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>