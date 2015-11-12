<?php

require('configs/include.php');

class c_inicio extends super_controller {
	
	
	public function display()
	{
            $contenido = 'empty.tpl';
            
            if($this->get->codigo==765) {
                $this->error=1; 
                $this->msg_warning=" Zona restringida ";
                $this->temp_aux = 'message.tpl';
		$this->engine->assign('type_warning',$this->type_warning);
		$this->engine->assign('msg_warning',$this->msg_warning);
		
            }
                
            else {$this->engine->assign('mensaje', "Bienvenido");
            $contenido='inicio.tpl';
            } 
            
            
	$this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('inicio.tpl');
        $this->engine->display('footer.tpl');
	}
	public function run()
	{
		$this->display();
	}
}

$call = new c_inicio();
$call->run();

?>