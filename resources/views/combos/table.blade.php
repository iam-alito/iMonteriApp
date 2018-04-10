<table class="table table-responsive" id="combos-table">
    <thead>
        <tr>
            <th>Concepto Combo</th>
        <th>Concepto</th>
        <th>Estado</th>
        <th>Creado por</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($combos as $combos)
        <tr>
            <td>{!! $combos->concepto_combo !!}</td>
            <td>{!! $combos->desconcep !!}</td>
            <td>{!! $combos->descestado !!}</td>
            <td>{!! $combos->name !!}</td>
            <td>
                {!! Form::open(['route' => ['combos.destroy', $combos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('combos.show', [$combos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('combos.edit', [$combos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>