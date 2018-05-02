
<li class="{{ Request::is('vehiculos*') ? 'active' : '' }}">
    <a href="{!! route('vehiculos.index') !!}"><i class="fa fa-edit"></i><span>Vehiculos</span></a>
</li>

<li class="{{ Request::is('puestos*') ? 'active' : '' }}">
    <a href="{!! route('puestos.index') !!}"><i class="fa fa-edit"></i><span>Puestos</span></a>
</li>



<li class="{{ Request::is('prestamos*') ? 'active' : '' }}">
    <a href="{!! route('prestamos.index') !!}"><i class="fa fa-edit"></i><span>Prestamos</span></a>
</li>





<li class="{{ Request::is('facturacions*') ? 'active' : '' }}">
    <a href="{!! route('facturacions.index') !!}"><i class="fa fa-edit"></i><span>Facturacions</span></a>
</li>



