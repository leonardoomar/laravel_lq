@extends('ppal')

@section('contenido')

{{ Form::open(array('action' => 'transaccionController@actualizaPaciente')) }}

    
    
    {{ Form::label('dni', 'Nro Documento') }}
    {{ Form::text('dni',$resultado['0']->dni)}}
    

    {{ Form::label('nom', 'Nombre') }}
    {{ Form::text('nom',$resultado['0']->nombre)}}
    
    {{ Form::label('ape', 'Apellido') }}
    {{ Form::text('ape',$resultado['0']->apellido) }}
    
    {{ Form::label('telcel', 'Telefono celular') }}
    {{ Form::text('telcel',$resultado['0']->telCelular) }}
    
    {{ Form::label('telfij', 'Telefono fijo') }}
    {{ Form::text('telfij',$resultado['0']->telFijo) }}
    
    {{ Form::label('otrostel', 'Otros telefonos') }}
    {{ Form::text('otrostel',$resultado['0']->otrosTel) }}
    
    {{ Form::label('idOS', 'Codigo obra social') }}
    {{ Form::text('idOS',$resultado['0']->idObraSocial) }}
    
    {{ Form::label('obs', 'Observaciones') }}
    {{ Form::text('obs',$resultado['0']->observaciones) }}
    
    {{ Form::submit('Actualizar') }}



{{ Form::close() }}



@stop