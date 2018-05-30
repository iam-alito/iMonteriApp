<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'ID:') !!}
    <p>{!! $elementos[0]->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{!! $elementos[0]->descripcion !!}</p>
</div>

<!-- Lon Field -->
<div class="form-group">
    {!! Form::label('lon', 'Longitud:') !!}
    <p>{!! $elementos[0]->lon !!}</p>
</div>

<!-- Lat Field -->
<div class="form-group">
    {!! Form::label('lat', 'Latitud:') !!}
    <p>{!! $elementos[0]->lat !!}</p>
</div>

<!-- Icono Field -->
<div class="form-group">
    {!! Form::label('icono', 'Icono:') !!}
    <p><img src="{{$elementos[0]->icono}}" width="100"></p>
</div>

<!-- Fotos Field -->
<div class="form-group">
    {!! Form::label('foto', 'Fotos:') !!}
    <br>
    @foreach($elementos as $fotos)
        <img src="{{$fotos->foto}}" width="150">
    @endforeach
</div>
<!-- Servicios Field -->
<div class="form-group">
    {!! Form::label('servicios_id', 'Servicios:') !!}
    @foreach($elementos as $servicios)
        <p>{!! $servicios->servicios_id !!}</p>
    @endforeach
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado a las:') !!}
    <p>{!! $elementos[0]->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado a las:') !!}
    <p>{!! $elementos[0]->updated_at !!}</p>
</div>

