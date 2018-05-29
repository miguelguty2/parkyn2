<table class="table table-responsive" id="puestos-table">
    <thead>
        <tr>
            <th>Numero</th>
        <th>Estado</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($puestos as $puestos)
        <tr>
            <td>{!! $puestos->numero !!}</td>
            <td>{!! $puestos->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['puestos.destroy', $puestos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('puestos.show', [$puestos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('puestos.edit', [$puestos->id]) !!}" class='btn btn-default btn-xl'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xl', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>