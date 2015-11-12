<?php

require('configs/include.php');

class c_inicio extends super_controller {
	
	public function display()
	{
		$this->engine->assign('title',$this->gvar['n_index']);
		
		$this->engine->display('inicio.tpl');
	}
	
	public function run()
	{
		$this->display();
	}
}

$call = new c_inicio();
$call->run();