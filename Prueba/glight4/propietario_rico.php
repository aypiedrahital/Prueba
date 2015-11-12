<?php

require('./configs/include.php');

class c_canalVideo extends super_controller {

    		public function display()
		{
		$options['canal']['lvl2']="by video";
		$this->orm->connect();
		$this->orm->read_data(array("propietario"),$options);
		$propietario=$this->orm->get_objects("propietario");
		$this->orm->close();
		
		$this->engine->assign('propietario',$propietario);
		$this->engine->assign('title','Listar propietarios');
		
		$this->engine->display('header.tpl');
		$this->engine->display('propietario_rico.tpl');
		$this->engine->display('footer.tpl');
		}
		
		public function run()
		{
		$this->display();
		}
	}
	$call=new c_canalVideo();
	$call->run();