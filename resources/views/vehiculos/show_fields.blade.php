<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $vehiculos->id !!}</p>
</div>

<!-- Placa Field -->
<div class="form-group">
    {!! Form::label('placa', 'Placa:') !!}
    <p>{!! $vehiculos->placa !!}</p>
</div>

<!-- Hora Ini Field -->
<div class="form-group">
    {!! Form::label('hora_ini', 'Hora Inicial:') !!}
    <p>{!! $vehiculos->hora_ini !!}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $vehiculos->fecha !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado Por:') !!}
    <p>{!! $vehiculos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado Por:') !!}
    <p>{!! $vehiculos->updated_at !!}</p>
</div>

