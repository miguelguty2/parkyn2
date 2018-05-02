<table class="table table-responsive" id="prestamos-table">
    <thead>
        <tr>
            <th>Valor Hora</th>
        <th>Fecha</th>
        <th>Hora Inicial</th>
        <th>Hora Fin</th>
        <th>Puestos Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($prestamos as $prestamos)
        <tr>
            <td>{!! $prestamos->Valor_hora !!}</td>
            <td>{!! $prestamos->fecha !!}</td>
            <td>{!! $prestamos->Hora_Inicial !!}</td>
            <td>{!! $prestamos->Hora_Fin !!}</td>
            <td>{!! $prestamos->puestos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['prestamos.destroy', $prestamos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prestamos.show', [$prestamos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prestamos.edit', [$prestamos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>