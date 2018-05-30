<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="glyphicon glyphicon-tasks"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('categoriasElementos*') ? 'active' : '' }}">
    <a href="{!! route('categoriasElementos.index') !!}"><i class="glyphicon glyphicon-tasks"></i><span>Categorias y sus Elementos</span></a>
</li>

<li class="{{ Request::is('elementos*') ? 'active' : '' }}">
    <a href="{!! route('elementos.index') !!}"><i class="glyphicon glyphicon-tasks"></i><span>Elementos</span></a>
</li>

<li class="{{ Request::is('fotos*') ? 'active' : '' }}">
    <a href="{!! route('fotos.index') !!}"><i class="fa fa-photo"></i><span>Elementos y sus Fotos</span></a>
</li>

<li class="{{ Request::is('tipoServicios*') ? 'active' : '' }}">
    <a href="{!! route('tipoServicios.index') !!}"><i class="fa fa-edit"></i><span>Tipo de  Servicios</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{!! route('servicios.index') !!}"><i class="fa fa-cutlery"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('serviciosElementos*') ? 'active' : '' }}">
    <a href="{!! route('serviciosElementos.index') !!}"><i class="fa fa-edit"></i><span>Elementos y sus Servicios</span></a>
</li>

<li class="{{ Request::is('favoritosElementos*') ? 'active' : '' }}">
    <a href="{!! route('favoritosElementos.index') !!}"><i class="fa fa-heart"></i><span>Favoritos</span></a>
</li>

<li class="{{ Request::is('comentarios*') ? 'active' : '' }}">
    <a href="{!! route('comentarios.index') !!}"><i class="fa fa-commenting-o"></i><span>Comentarios</span></a>
</li>

