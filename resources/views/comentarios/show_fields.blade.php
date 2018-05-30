<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comentarios->id !!}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('comentario', 'Comentario:') !!}
    <p>{!! $comentarios->comentario !!}</p>
</div>

<!-- Elementos Id:integer:unsigned:foreign,elementos,id Field -->
<div class="form-group">
    {!! Form::label('elementos_id:integer:unsigned:foreign,elementos,id', 'Elementos Id:integer:unsigned:foreign,elementos,id:') !!}
    <p>{!! $comentarios->elementos_id:integer:unsigned:foreign,elementos,id !!}</p>
</div>

<!-- Users Id:integer:unsigned:foreign,users,id Field -->
<div class="form-group">
    {!! Form::label('users_id:integer:unsigned:foreign,users,id', 'Users Id:integer:unsigned:foreign,users,id:') !!}
    <p>{!! $comentarios->users_id:integer:unsigned:foreign,users,id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comentarios->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comentarios->updated_at !!}</p>
</div>

