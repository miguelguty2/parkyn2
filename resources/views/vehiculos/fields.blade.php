<!-- Placa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('placa', 'Placa:') !!}
    {!! Form::text('placa', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_ini', 'Hora Ini:') !!}
    {!! Form::text('hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Puestos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puestos_id', 'Puestos Id:') !!}
    {!! Form::select('puestos_id',$datos['puestos'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vehiculos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
