<?php

require('configs/include.php');

class c_index extends super_controller {
	
	public function display()
	{
		$this->engine->assign('title',$this->gvar['n_index']);
		
		$this->engine->display('header.tpl');
		$this->engine->display('index.tpl');
		$this->engine->display('footer.tpl');
	}
	
	public function run()
	{
		if(isset($this->get->option)){
			$this->{$this->get->option}();
		}
		
		$this->display();
	}
}

$call = new c_index();
$call->run();

?>