<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prestamos->id !!}</p>
</div>

<!-- Valor Hora Field -->
<div class="form-group">
    {!! Form::label('Valor_hora', 'Valor Hora:') !!}
    <p>{!! $prestamos->Valor_hora !!}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $prestamos->fecha !!}</p>
</div>

<!-- Hora Inicial Field -->
<div class="form-group">
    {!! Form::label('Hora_Inicial', 'Hora Inicial:') !!}
    <p>{!! $prestamos->Hora_Inicial !!}</p>
</div>

<!-- Hora Fin Field -->
<div class="form-group">
    {!! Form::label('Hora_Fin', 'Hora Fin:') !!}
    <p>{!! $prestamos->Hora_Fin !!}</p>
</div>

<!-- Puestos Id Field -->
<div class="form-group">
    {!! Form::label('puestos_id', 'Puestos Id:') !!}
    <p>{!! $prestamos->puestos_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $prestamos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $prestamos->updated_at !!}</p>
</div>

