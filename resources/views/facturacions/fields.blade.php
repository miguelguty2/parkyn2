<!-- N Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('n_factura', 'N Factura:') !!}
    {!! Form::text('n_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo', 'Tiempo:') !!}
    {!! Form::text('tiempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Valor_total', 'Valor Total:') !!}
    {!! Form::text('Valor_total', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehiculos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehiculos_id', 'Vehiculos Id:') !!}
    {!! Form::select('vehiculos_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Prestamos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prestamos_id', 'Prestamos Id:') !!}
    {!! Form::select('prestamos_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('facturacions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
