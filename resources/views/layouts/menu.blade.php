

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{!! route('categorias.index') !!}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('tipoServicios*') ? 'active' : '' }}">
    <a href="{!! route('tipoServicios.index') !!}"><i class="fa fa-edit"></i><span>Tipo  Servicios</span></a>
</li>


<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{!! route('servicios.index') !!}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

