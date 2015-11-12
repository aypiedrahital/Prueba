<?php
require ('configs/include.php');
class mostrar2_g extends super_controller{

	public function display(){
	$code['granjero']['id']=$this->get->id;
	$options['granjero']['lvl2']="one";
	$this->orm->connect();
	$this->orm->read_data(array("granjero"), $options, $code);
	$granjero=$this->orm->get_objects("granjero");
	$this->engine->assign('granjero', $granjero);
	$options['finca']['lvl2']="by_id";
	$codes['finca']['id']=$this->get->id;
	$this->orm->read_data(array("finca"), $options, $codes);
	$finca=$this->orm->get_objects("finca");
	if(is_empty($finca)){
	$mensaje="No tiene fincas";
	}
	$this->engine->assign('mensaje', $mensaje);
	$this->engine->assign('finca', $finca);
	$this->engine->assign('title', 'Granjeros');
	$this->engine->display('header.tpl');
	$this->engine->display('mostrar2_g.tpl');
	$this->engine->display('footer.tpl');
	$this->orm->close();
	}
	
	public function run(){

	$this->display();
	}


}
$call=new mostrar2_g();
$call->run();
?>