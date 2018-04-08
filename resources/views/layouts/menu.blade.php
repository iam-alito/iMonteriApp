<li class="{{ Request::is('estados*') ? 'active' : '' }}">
    <a href="{!! route('estados.index') !!}"><i class="fa fa-edit"></i><span>Estados</span></a>
</li>

<li class="{{ Request::is('tipoConceptos*') ? 'active' : '' }}">
    <a href="{!! route('tipoConceptos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Conceptos</span></a>
</li>
<li class="{{ Request::is('conceptos*') ? 'active' : '' }}">
    <a href="{!! route('conceptos.index') !!}"><i class="fa fa-edit"></i><span>Conceptos</span></a>
</li>

<li class="{{ Request::is('valoresConceptos*') ? 'active' : '' }}">
    <a href="{!! route('valoresConceptos.index') !!}"><i class="fa fa-edit"></i><span>Valores Conceptos</span></a>
</li>

<li class="{{ Request::is('tipoIdentificacions*') ? 'active' : '' }}">
    <a href="{!! route('tipoIdentificacions.index') !!}"><i class="fa fa-edit"></i><span>Tipo Identificacions</span></a>
</li>

