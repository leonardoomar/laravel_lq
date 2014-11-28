@extends('ppal')

@section('contenido')


{{ Form::open(array('action' => 'transaccionController@nuevoPaciente')) }}

    {{ Form::label('dni', 'Nro Documento') }}
    {{ Form::text('dni') }}

    {{ Form::label('nom', 'Nombre') }}
    {{ Form::text('nom') }}
    
    {{ Form::label('ape', 'Apellido') }}
    {{ Form::text('ape') }}
    
    {{ Form::label('telcel', 'Telefono celular') }}
    {{ Form::text('telcel') }}
    
    {{ Form::label('telfij', 'Telefono fijo') }}
    {{ Form::text('telfij') }}
    
    {{ Form::label('otrostel', 'Otros telefonos') }}
    {{ Form::text('otrostel') }}
    
    {{ Form::label('idOS', 'Codigo obra social') }}
    {{ Form::text('idOS') }}
    
    {{ Form::label('obs', 'Observaciones') }}
    {{ Form::text('obs') }}
    
    {{ Form::submit('Guardar') }}



{{ Form::close() }}

@stop
