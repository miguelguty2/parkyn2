<!-- Numero Factura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_factura', 'Numero Factura:') !!}
    {!! Form::text('numero_factura', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo', 'Tiempo:') !!}
    {!! Form::text('tiempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Hora Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_final', 'Hora Final:') !!}
    {!! Form::text('hora_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Pagar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_pagar', 'Total Pagar:') !!}
    {!! Form::text('total_pagar', null, ['class' => 'form-control']) !!}
</div>


<!-- Vehiculos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehiculos_id', 'Vehiculos Id:') !!}
    {!! Form::select('vehiculos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::select('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('facturas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
