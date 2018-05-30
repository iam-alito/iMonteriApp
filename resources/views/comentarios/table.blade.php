<table class="table table-responsive" id="comentarios-table">
    <thead>
        <tr>
            <th>Comentario</th>
        <th>Elementos Id:integer:unsigned:foreign,elementos,id</th>
        <th>Users Id:integer:unsigned:foreign,users,id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comentarios as $comentarios)
        <tr>
            <td>{!! $comentarios->comentario !!}</td>
            <td>{!! $comentarios->elementos_id:integer:unsigned:foreign,elementos,id !!}</td>
            <td>{!! $comentarios->users_id:integer:unsigned:foreign,users,id !!}</td>
            <td>
                {!! Form::open(['route' => ['comentarios.destroy', $comentarios->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('comentarios.show', [$comentarios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('comentarios.edit', [$comentarios->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>