<table class="table table-responsive" id="facturacions-table">
    <thead>
        <tr>
            <th>N Factura</th>
        <th>Fecha</th>
        <th>Tiempo</th>
        <th>Valor Total</th>
        <th>Vehiculos Id</th>
        <th>Users Id</th>
        <th>Prestamos Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($facturacions as $facturacions)
        <tr>
            <td>{!! $facturacions->n_factura !!}</td>
            <td>{!! $facturacions->fecha !!}</td>
            <td>{!! $facturacions->tiempo !!}</td>
            <td>{!! $facturacions->Valor_total !!}</td>
            <td>{!! $facturacions->vehiculos_id !!}</td>
            <td>{!! $facturacions->users_id !!}</td>
            <td>{!! $facturacions->prestamos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['facturacions.destroy', $facturacions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('facturacions.show', [$facturacions->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('facturacions.edit', [$facturacions->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>