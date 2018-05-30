<table class="table table-responsive" id="elementos-table">
    <thead>
        <tr>
            <th>Descripción</th>
        <th>Longitud</th>
        <th>Latitud</th>
        <th>Icono</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($elementos as $elementos)
        <tr>
            <td>{!! $elementos->descripcion !!}</td>
            <td>{!! $elementos->lon !!}</td>
            <td>{!! $elementos->lat !!}</td>
            <td><img src="{{$elementos->icono}}" width="100"></td>
            <td>
                {!! Form::open(['route' => ['elementos.destroy', $elementos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('elementos.show', [$elementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('elementos.edit', [$elementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>