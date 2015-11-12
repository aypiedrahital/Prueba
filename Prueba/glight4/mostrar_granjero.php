<?php

require('configs/include.php');

class mostrar_granjero extends super_controller {

    public function display()
    {
        
        
        $this->orm->connect();
        
		$options['granjero']['lvl2']="all";
		$this->orm->read_data(array("granjero"),$options);
        $granjero = $this->orm->get_objects("granjero");
		$this->engine->assign('granjero',$granjero);
        $this->engine->assign('title','granjeros');
        $this->engine->display('header.tpl');
        $this->engine->display('mostrar_granjero.tpl');
        $this->engine->display('footer.tpl');
		$this->orm->close();
    }
    
    public function run()
    {
        $this->display();
    }
}

$call = new mostrar_granjero();
$call->run();

?>