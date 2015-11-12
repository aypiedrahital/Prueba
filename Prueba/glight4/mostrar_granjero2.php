<?php

require('configs/include.php');

class mostrar_granjero2 extends super_controller {
    
    public function cargar_granjero()
    {
		$id=$this->get->id;
		
        $this->orm->connect();
		$options['granjero']['lvl2']="one";
		$options['finca']['lvl2']="all";
		$code['granjero']['id']=$id;
		$components['granjero']['finca']=array('g_f');
		$this->orm->read_data(array("granjero","finca"), $options, $code);
		$granjero=$this->orm->get_objects("granjero", $components);
		print_r2($granjero);
		$this->engine->assign('granjero', $granjero[0]);
        $this->orm->close();
    }

    public function display()
    {
	
		$this->engine->assign('title', 'Insertar');
        $this->engine->display('header.tpl');
        $this->engine->display('mostrar_granjero2.tpl');
        $this->engine->display('footer.tpl');
    }
    
    public function run()
    {
        try {
		if (isset($this->get->option))
		{
		$this->{$this->get->option}();
		}
		}
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

$call = new mostrar_granjero2();
$call->run();

?>