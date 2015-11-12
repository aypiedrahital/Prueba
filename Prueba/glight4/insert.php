<?php

require('configs/include.php');

class c_insert extends super_controller {
    
    public function add()
    {
        $clerk = new clerk($this->post);
        if(is_empty($clerk->get('id')))
		{throw_exception("Debe ingresar un id");}
		
        $this->orm->connect();
        $this->orm->insert_data("normal",$clerk);
        $this->orm->close();
        
        $this->type_warning = "success";
        $this->msg_warning = "Persona agregada correctamente";
        
        $this->temp_aux = 'message.tpl';
        $this->engine->assign('type_warning',$this->type_warning);
        $this->engine->assign('msg_warning',$this->msg_warning);
    }

    public function display()
    {
        $this->engine->display('header.tpl');
        $this->engine->display($this->temp_aux);
        $this->engine->display('insert.tpl');
        $this->engine->display('footer.tpl');
    }
    
    public function run()
    {
        try {if (isset($this->get->option)){$this->{$this->get->option}();}}
        catch (Exception $e) 
		{
			$this->error=1; $this->msg_warning=$e->getMessage();
			$this->engine->assign('type_warning',$this->type_warning);
			$this->engine->assign('msg_warning',$this->msg_warning);
			$this->temp_aux = 'message.tpl';
		}    
        $this->display();
    }
}

$call = new c_insert();
$call->run();

?>
