@extends('ppal')

@section('contenido')

{{ Form::open(array('action' => 'transaccionController@bajaPaciente')) }}

    {{ Form::label('dni', 'Nro Documento') }}
    {{ Form::text('dni') }}    
    {{ Form::submit('Eliminar') }}


{{ Form::close() }}


@stop