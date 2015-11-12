<?php

require('configs/include.php');
class c_conversor extends super_controller{
    
    public function conversion(){
		
		
		$this->engine->assign('resultado',$this->get->tasa*$this->get->dolares);
	}
        
            
    public function display(){
        
        $this->engine->assign('title', 'conversor');
        $this->engine->display('header.tpl');
        $this->engine->display('conversor.tpl');
        $this->engine->display('footer.tpl');
    }
   
    public function run(){
        if(isset($this->get->option)){
            $this->{$this->get->option}();
        }
        $this->display();
    } 
}

$call = new c_conversor();
$call->run();
?>