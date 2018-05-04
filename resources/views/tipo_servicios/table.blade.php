<table class="table table-responsive" id="tipoServicios-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoServicios as $tipoServicios)
        <tr>
            <td>{!! $tipoServicios->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoServicios.destroy', $tipoServicios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoServicios.show', [$tipoServicios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoServicios.edit', [$tipoServicios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>