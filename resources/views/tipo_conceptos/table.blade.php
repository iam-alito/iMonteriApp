<table class="table table-responsive" id="tipoConceptos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Creador por</th>
            <th>Action</th>
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
                    <a href="{!! route('tipoConceptos.show', [$tipoConceptos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoConceptos.edit', [$tipoConceptos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>