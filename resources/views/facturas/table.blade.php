<table class="table table-responsive" id="facturas-table">
    <thead>
        <tr>
            <th>Numero Factura</th>
        <th>Tiempo</th>
        <th>Hora Final</th>
        <th>Total Pagar</th>
        <th>Vehiculos Id</th>
        <th>Users Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($facturas as $facturas)
        <tr>
            <td>{!! $facturas->numero_factura !!}</td>
            <td>{!! $facturas->tiempo !!}</td>
            <td>{!! $facturas->hora_final !!}</td>
            <td>{!! $facturas->total_pagar !!}</td>
            <td>{!! $facturas->vehiculos_id !!}</td>
            <td>{!! $facturas->users_id !!}</td>
            <td>
                {!! Form::open(['route' => ['facturas.destroy', $facturas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('facturas.show', [$facturas->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('facturas.edit', [$facturas->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>