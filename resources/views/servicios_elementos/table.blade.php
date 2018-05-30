<table class="table table-responsive" id="serviciosElementos-table">
    <thead>
        <tr>
            <th>Servicio</th>
        <th>Elemento</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($serviciosElementos as $serviciosElementos)
        <tr>
            <td>{!! $serviciosElementos->servicios_id !!}</td>
            <td>{!! $serviciosElementos->elementos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['serviciosElementos.destroy', $serviciosElementos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('serviciosElementos.show', [$serviciosElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('serviciosElementos.edit', [$serviciosElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>