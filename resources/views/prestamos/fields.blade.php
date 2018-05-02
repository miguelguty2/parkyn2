<!-- Valor Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Valor_hora', 'Valor Hora:') !!}
    {!! Form::text('Valor_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora_Inicial', 'Hora Inicial:') !!}
    {!! Form::text('Hora_Inicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Hora_Fin', 'Hora Fin:') !!}
    {!! Form::text('Hora_Fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Puestos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puestos_id', 'Puestos Id:') !!}
    {!! Form::select('puestos_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prestamos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
