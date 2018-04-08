<table class="table table-responsive" id="usuariosRols-table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuariosRols as $usuariosRol)
        <tr>
            <td>{!! $usuariosRol->usuario !!}</td>
            <td>{!! $usuariosRol->roles !!}</td>
            <td>
                {!! Form::open(['route' => ['usuariosRols.destroy', $usuariosRol->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usuariosRols.show', [$usuariosRol->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usuariosRols.edit', [$usuariosRol->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>