<table class="table table-responsive" id="fotos-table">
    <thead>
        <tr>
            <th>Elemento</th>
        <th>Foto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($fotos as $fotos)
        <tr>
            <td>{!! $fotos->elementos_id !!}</td>
            <td><img src="{{$fotos->foto}}" width="100"></td>
            <td>
                {!! Form::open(['route' => ['fotos.destroy', $fotos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fotos.show', [$fotos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fotos.edit', [$fotos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>