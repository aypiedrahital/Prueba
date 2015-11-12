<?php
	require('configs/include.php');
	class c_extraerbd extends super_controller{
		public function display()
		{
		$options['boss']['lvl2']="all";
		$this->orm->connect();
		$this->orm->read_data(array("boss"),$options);
		$boss=$this->orm->get_objects("boss");
		$this->orm->close();
		
		$this->engine->assign('boss',$boss);
		$this->engine->assign('title','Extraer BD');
		
		$this->engine->display('header.tpl');
		$this->engine->display('extraerbd.tpl');
		$this->engine->display('footer.tpl');
		}
		
		public function run()
		{
		$this->display();
		}
	}
	$call=new c_extraerbd();
	$call->run();
?>