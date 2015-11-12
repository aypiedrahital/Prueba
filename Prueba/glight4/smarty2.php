<?php
require('configs/include.php');
  class c_smarty2 extends super_controller()
  {
  public function display(){
  $data=array(1323,455,897);
  $this->engine->assign('id',$data);
  $this->engine->assign('title','Examples Smarty');
  $this->engine->display('header'.tpl);
  $this->engine->display('smarty2'.tpl);
  $this->engine->display('footer'.tpl);
  }
  
  
   public function run(){
	$this->display();
	}
}
$call= new c_smarty2();
$call->run();
?>