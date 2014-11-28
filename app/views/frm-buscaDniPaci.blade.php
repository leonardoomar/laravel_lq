@extends('ppal')

@section('contenido')

{{ Form::open(array('action' => 'transaccionController@buscaPaciente')) }}

    {{ Form::label('dni', 'Nro Documento') }}
    {{ Form::text('dni') }}    
    {{ Form::submit('Buscar') }}


{{ Form::close() }}

@stop