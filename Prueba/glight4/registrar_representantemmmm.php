<?php
	require('configs/include.php');
	require('modules/m_phpass/PasswordHash.php');
	
	class c_registrar_representante extends super_controller {

		public function registrarRepresentante()		
	    {
	        $representante = new representante($this->post);	        
			
	
		
		    if (is_empty($representante->get('nombre')) 
			|| is_empty($representante->get('cedula'))
			|| is_empty($representante->get('contrasena')))
            throw_exception("Campos vacíos: Debe ingresar todos los campos marcados por (*).");
	
	         if(is_numeric($representante->get('cedula'))){
				 $bandera = 1;
			 }
			 else 
			 {
				 $bandera = 0;
			 }
			 if ($bandera == 0)
			 {
				throw_exception("Caracter no permitido: Alguno de los caracteres ingresados para el campo 'cédula' no son permitidos");  
			 }
				 
			 

	        $this->orm->connect();
	        $this->orm->insert_data("normal",$representante);
	        $this->orm->close();
	        
	        $this->type_warning = "success";
	        $this->msg_warning = "El representante ha sido registrado exitosamente";
	        
	        $this->temp_aux = 'message.tpl';
	        $this->engine->assign('type_warning',$this->type_warning);
	        $this->engine->assign('msg_warning',$this->msg_warning);
	    }

	    public function display()
	    {
	    	$_SESSION['persona']['cedula']='101';
	    	//$this->engine->display('header.tpl');	        
	        $this->engine->assign('representante',$_SESSION['persona']['cedula']);
	        $this->engine->display($this->temp_aux);
	        $this->engine->display('registrar_representante.tpl');
	        //$this->engine->display('footer.tpl');
	    }
		
		public function run()
		{
			try {if (isset($this->get->option)){$this->{$this->get->option}();}}
		        catch (Exception $e) 
				{					
			      $cadena_de_texto = $e->getMessage();
                  $cadena_buscada = 'Duplicate entry';
                  $posicion_coincidencia = strrpos($cadena_de_texto, $cadena_buscada);
            //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
                 if ($posicion_coincidencia === false) {
                $this->msg_warning = $e->getMessage();
                } else {
                $this->msg_warning = "El usuario ya existe";
                   }
			
					$this->error=1; 
					//$this->msg_warning=$e->getMessage();
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