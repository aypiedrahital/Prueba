<?php
	require('configs/include.php');
	require('modules/m_phpass/PasswordHash.php');
	
	class c_registrar_representante extends super_controller {

		public function RegistrarRepresentante()		
	    {
	        $persona=new persona($this->post);		
			
		    if (is_empty($persona->get('nombre'))  || is_empty($persona->get('cedula')) || is_empty($persona->get('contrasena')))
			{
			    $this->temp_aux = 'message.tpl';
				$msg_icon="warning";
				$msg_type="aplicationError";
				$msg_content="Campos vacíos: Debe ingresar todos los  campos marcados por (*).";
				$this->engine->assign('msg_icon', $msg_icon);
				$this->engine->assign('msg_type', $msg_type);
				$this->engine->assign('msg_content', $msg_content);
			} else
			{
			if($this->validarCaracteres($persona)){
				if($this->validarExistencia($persona)){
					$persona->set("rol","representante");
					$this->orm->connect();
					$this->orm->insert_data("normal", $persona);



					$this->temp_aux = 'message.tpl';
					$msg_icon="check-square";
					$msg_type="Registro completado";
					$msg_content="El representante se ha registrado éxitosamente en la base de datos";
					$this->engine->assign('msg_icon', $msg_icon);
					$this->engine->assign('msg_type', $msg_type);
					$this->engine->assign('msg_content', $msg_content);

					$this->orm->close();
				}
			}
			}	        
	    }
		private function validarCaracteres($persona){
			if(!is_numeric($persona->get('cedula'))){
				$this->temp_aux = 'message.tpl';
				$msg_icon="warning";
				$msg_type="Caracteres no permitidos";
				$msg_content="Alguno de los caracteres ingresados para el campo ‘Cédula’ no son permitidos";
				$this->engine->assign('msg_icon', $msg_icon);
				$this->engine->assign('msg_type', $msg_type);
				$this->engine->assign('msg_content', $msg_content);
				return false;
			}
			return true;

		}
		
		private function validarExistencia($persona){
			$options['persona']['lvl2']="by_cedula";
			$cod['persona']['cedula']=$persona->get('cedula');

			$this->orm->connect();
			$this->orm->read_data(array("persona"), $options, $cod);
			$persona2 = $this->orm->get_objects("persona",$components);

			if(!is_empty($persona2)){
				$this->temp_aux = 'message.tpl';
				$msg_icon="warning";
				$msg_type="Cedula ya registrada";
				$msg_content="La cédula que está tratando de registrar ya existe en la base de datos";
				$this->engine->assign('msg_icon', $msg_icon);
				$this->engine->assign('msg_type', $msg_type);
				$this->engine->assign('msg_content', $msg_content);
				$this->orm->close();
				return false;
			}
			$options['persona']['lvl2']="by_name";
			$cod['persona']['nombre']=$persona->get('nombre');

			$this->orm->read_data(array("persona"), $options, $cod);
			$persona2 = $this->orm->get_objects("persona",$components);

			if(!is_empty($persona2)){
				$this->temp_aux = 'message.tpl';
				$msg_icon="warning";
				$msg_type="Nombre de representante ya registrado";
				$msg_content="El nombre que está tratando de registrar ya existe en la base de datos";
				$this->engine->assign('msg_icon', $msg_icon);
				$this->engine->assign('msg_type', $msg_type);
				$this->engine->assign('msg_content', $msg_content);
				$this->orm->close();
				return false;
			}
					

			$this->orm->close();
			return true;

		}
		

	    public function display()
	    {
	    	$this->engine->assign('title', "Registrar representante");
	
	    	$this->engine->display($this->temp_aux);
	        $this->engine->display('registrar_representante.tpl');
	     
	    }
		
		public function run()
		{
			try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		        catch (Exception $e) 
				{					
					$this->error=1; $this->msg_warning=$e->getMessage();
					$this->engine->assign('object',$this->post);
					$this->engine->assign('type_warning',$this->type_warning);
					$this->engine->assign('msg_warning',$this->msg_warning);
					$this->temp_aux = 'message.tpl';				
				}    
        $this->display();

		}
	}

	$call = new c_registrar_representante();
	$call->run();

?>