<li class="{{ Request::is('puestos*') ? 'active' : '' }}">
    <a href="{!! route('puestos.index') !!}"><i class="fa fa-edit"></i><span>Puestos</span></a>
</li>

<li class="{{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a href="{!! route('vehiculos.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos</span></a>
</li>


<li class="{{ Request::is('facturas*') ? 'active' : '' }}">
    <a href="{!! route('facturas.index') !!}"><i class="fa fa-edit"></i><span>facturas</span></a>
</li>
