<table class="table table-responsive" id="favoritosElementos-table">
    <thead>
        <tr>
            <th>Elementos Id</th>
        <th>Users Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($favoritosElementos as $favoritosElementos)
        <tr>
            <td>{!! $favoritosElementos->elementos_id !!}</td>
            <td>{!! $favoritosElementos->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['favoritosElementos.destroy', $favoritosElementos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('favoritosElementos.show', [$favoritosElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('favoritosElementos.edit', [$favoritosElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>