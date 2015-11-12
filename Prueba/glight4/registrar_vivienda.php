<?php

require('configs/include.php');

class c_registrar_vivienda extends super_controller {
	
    public function add(){
        $this->post->propietario=$this->post->cedula;
        
        $vivienda= new vivienda($this->post);
        $propietario = new propietario($this->post);
        
        
        if(
            $vivienda->get('estrato')!=1 &&                
            $vivienda->get('estrato')!=2 &&                 
            $vivienda->get('estrato')!=3 &&                 
            $vivienda->get('estrato')!=4 && 
            $vivienda->get('estrato')!=5){
        throw_exception("El estrato no es válido");
        }
        
        $this->orm->connect();
        $this->orm->insert_data("normal",$propietario);
        $this->orm->insert_data("normal",$vivienda);
               
        $this->orm->close();
        
        $this->type_warning = "success";
        $this->msg_warning = "Vivienda agregada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
        
        
        
    }


    
    public function display()
    {
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('registrar_vivienda.tpl');
        $this->engine->display('footer.tpl');
    }
  	
	public function run()
	{  
        try {
            if (isset($this->get->option)){
                $this->{$this->get->option}();
            }
        }
        catch (Exception $e){
		$this->error=1; $this->msg_warning=$e->getMessage();
		$this->engine->assign('type_warning',$this->type_warning);
                // El mensaje pasa a ser el que se arrojó en la función add()
		$this->engine->assign('msg_warning',$this->msg_warning);
		$this->temp_aux = 'message.tpl';
	}
        
        $this->display();
	}
        
}

$call = new c_registrar_vivienda();
$call->run();

?>