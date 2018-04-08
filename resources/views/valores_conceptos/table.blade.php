<table class="table table-responsive" id="valoresConceptos-table">
    <thead>
        <tr>
            <th>Conceptos Id</th>
        <th>Valor</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($valoresConceptos as $valoresConceptos)
        <tr>
            <td>{!! $valoresConceptos->conceptos_id !!}</td>
            <td>{!! $valoresConceptos->valor !!}</td>
            <td>
                {!! Form::open(['route' => ['valoresConceptos.destroy', $valoresConceptos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('valoresConceptos.show', [$valoresConceptos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('valoresConceptos.edit', [$valoresConceptos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>