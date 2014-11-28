<?php
class Paciente extends Eloquent{
    
    protected $table = 'paciente';
    public $timestamps = false;         /*deshabilita funcion de actualizar fechas*/    
    
    static function pacienteFull($dni){
        try{
            
            $r = DB::table('paciente')->join('persona','paciente.dni','=','persona.dni')
                    ->select('*')
                    ->where('paciente.dni', '=', Input::get('dni'))
                    ->get();
            return $r;
            
        }catch(Exception $e){
            
            throw new Exception('Error al intentar seleccionar paciente y persona');
            
        }
    }
    
    static function todosLosPacientes(){
        
            $f = DB::table('paciente')->join('persona','paciente.dni','=','persona.dni')
                    ->select('*')
                    ->get();
            return $f;
            
    }    
       
}