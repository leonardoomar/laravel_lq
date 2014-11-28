<?php

    class transaccionController extends BaseController{
        
        function nuevoPaciente(){
            
            try{

                $persona = new persona;
                $persona->dni = Input::get('dni');
                $persona->nombre = Input::get('nom');
                $persona->apellido = Input::get('ape');
                $persona->save();

                $paciente = new paciente;
                $paciente->dni = Input::get('dni');
                $paciente->telCelular = Input::get('telcel');
                $paciente->telFijo = Input::get('telfij');
                $paciente->otrosTel = Input::get('otrostel');
                $paciente->idObrasocial = Input::get('idOS');
                $paciente->observaciones = Input::get('obs');                        
                $paciente->save();

                return Response::make('alta exitosa', 200);
                
            } catch(Exception $e) {
                
                echo "Excepcion en controlador nuevoPaciente: (".$e->getMessage().")";

            }
                        
	}	
	
	function nuevaPersona(){
			
                $nuevo = new persona;
                $nuevo->dni = Input::get('dni');
                $nuevo->nombre = Input::get('nom');
                $nuevo->apellido = Input::get('ape');
                $nuevo->save();

                return Response::make('alta exitosa', 200);
	}	
	
	function bajaPaciente(){			

            try{
                
                $resultado = paciente::where('dni', '=', Input::get('dni'))
                ->delete();
                
                if ($resultado == 1) {      //si se elimino registro
                    
                    return Response::make('baja exitosa', 200);
                    
                } else {                    //si no se elimino registro
                    
                    throw new Exception('Paciente con dni especificado no existe.');
                    
                }

            } catch(Exception $e) {

                echo "Excepcion en controlador bajaPaciente: (".$e->getMessage().")";

            }
		
	}	
	
	function buscaPaciente(){	
		
            try{

                $resultado = paciente::pacienteFull(Input::get('dni'));

                return View::make('frm-modifPaci',  compact('resultado'));



            } catch(Exception $e) {

                echo "Excepcion en controlador buscaPaciente: (".$e->getMessage().")";

            }		
		
	}
	
	function actualizaPaciente(){
		
            try{                  

                persona::where('dni','=',Input::get('dni'))
                    ->update(array(
                        'nombre' => Input::get('nom'),
                        'apellido'=>Input::get('ape')
                        ));

                paciente::where('dni','=',Input::get('dni'))
                    ->update(array(
                        'telCelular'=>Input::get('telcel'),
                        'telFijo'=>Input::get('telfij'),
                        'otrosTel'=>Input::get('otrostel'),
                        'idObraSocial'=>Input::get('idOS'),
                        'observaciones'=>Input::get('obs')
                        ));

                return Response::make('modificacion exitosa', 200);

            } catch(Exception $e){

                    echo "Excepcion en modelo actualizaPaciente: (".$e->getMessage().")";

            }		
		
	}
        
        function aJson(){
            
            $todos = paciente::todosLosPacientes();
               
            $c = json_encode($todos);

            return View::make('lst-jsonPaci',  compact('c'));    
            
            
        }
	

    }

?>