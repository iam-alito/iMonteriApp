<table class="table table-responsive" id="valoresConceptos-table">
    <thead>
        <tr>
            <th>Concepto Id</th>
        <th>Valor</th>
        <th>Users Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($valoresConceptos as $valoresConcepto)
        <tr>
            <td>{!! $valoresConcepto->concepto_id !!}</td>
            <td>{!! $valoresConcepto->valor !!}</td>
            <td>{!! $valoresConcepto->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['valoresConceptos.destroy', $valoresConcepto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('valoresConceptos.show', [$valoresConcepto->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('valoresConceptos.edit', [$valoresConcepto->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>