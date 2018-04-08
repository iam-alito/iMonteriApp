<table class="table table-responsive" id="tipoConceptos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Usuarios</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoConceptos as $tipoConceptos)
        <tr>
            <td>{!! $tipoConceptos->descripcion !!}</td>
            <td>{!! $tipoConceptos->name !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoConceptos.destroy', $tipoConceptos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoConceptos.show', [$tipoConceptos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoConceptos.edit', [$tipoConceptos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>