<table class="table table-responsive" id="categoriasElementos-table">
    <thead>
        <tr>
            <th>Categoría</th>
        <th>Elemento</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriasElementos as $categoriasElementos)
        <tr>
            <td>{!! $categoriasElementos->categorias_id !!}</td>
            <td>{!! $categoriasElementos->elementos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['categoriasElementos.destroy', $categoriasElementos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriasElementos.show', [$categoriasElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriasElementos.edit', [$categoriasElementos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>