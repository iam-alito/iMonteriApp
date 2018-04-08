<table class="table table-responsive" id="conceptos-table">
    <thead>
        <tr>
            <th>Codigo</th>
        <th>Descripcion</th>
        <th>Tipo Concepto</th>
        <th>Estado</th>
        <th>Creado por</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($conceptos as $conceptos)
        <tr>
            <td>{!! $conceptos->codigo !!}</td>
            <td>{!! $conceptos->descripcion !!}</td>
            <td>{!! $conceptos->desctp !!}</td>
            <td>{!! $conceptos->desc_estado !!}</td>
            <td>{!! $conceptos->name !!}</td>
            <td>
                {!! Form::open(['route' => ['conceptos.destroy', $conceptos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('conceptos.show', [$conceptos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('conceptos.edit', [$conceptos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>