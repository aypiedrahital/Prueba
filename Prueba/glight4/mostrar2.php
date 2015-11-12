<?php
require ('configs/include.php');
class mostrar2 extends super_controller{

	public function display(){

	$options['finca']['lvl2']="especial_1";
	$this->orm->connect();
	$this->orm->read_data(array("finca"), $options, $code);
	$granjero=$this->orm->get_objects("finca");
	$this->engine->assign('finca', $finca);
	print_r2($finca);
	$id=$finca[0]['granjero'];
	$options['granjero']['lvl2']="one";
	$codes['granjero']['id']=$id;
	$this->orm->read_data(array("granjero"), $options, $codes);
	$finca=$this->orm->get_objects("granjero");
	if(is_empty($finca)){
	$mensaje="No tiene fincas";
	}
	$this->engine->assign('mensaje', $mensaje);
	$this->engine->assign('finca', $finca);
	$this->engine->assign('title', 'Granjeros');
	$this->engine->display('header.tpl');
	$this->engine->display('mostrar2.tpl');
	$this->engine->display('footer.tpl');
	$this->orm->close();
	}
	
	public function run(){

	$this->display();
	}


}
$call=new mostrar2();
$call->run();
?>