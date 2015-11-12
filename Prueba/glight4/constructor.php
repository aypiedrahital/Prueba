<?php

require('configs/include.php');
class c_constructor extends super_controller{

    public function display()
{
        settype($data,'object');
	$data->id="1001";
        $data->name="Andrew";
        $data->salary=5000;
	
	$clerk=new clerk($data);
        
	$this->engine->assign('tilte','class Constructor');
        $this->engine->assign('clerk',$clerk);
	$this->engine->display('header.tpl');
	$this->engine->display('constructor.tpl');
	$this->engine->display('footer.tpl');
	
        
}

	public function run(){
	$this->display();
	}
}
$call= new c_constructor();
$call->run();
?>