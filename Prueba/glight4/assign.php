<?php

require('configs/include.php');
class c_assign extends super_controller{
public function display()
{
	
	
	$num1=6;
	$num2=7;
	$this->engine->assign('total',$num1-$num2);
	$this->engine->display('header.tpl');
	$this->engine->display('assign.tpl');
	$this->engine->display('footer.tpl');
	
}

	public function run(){
	$this->display();
	}
}
$call= new c_assign();
$call->run();
?>