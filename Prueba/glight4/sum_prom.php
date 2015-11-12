<?php
require('configs/include.php');
class c_sum_prom extends super_controller{
	public function establecer_cantidad()
	{
		$this->engine->assign('bandera',1);
		$this->engine->assign('cantidad',$this->post->cantidad);
	}
	public function suma_promedio()
	{ 
	    $cantidad = $this->post->cantidad;
		$sum = 0;
		$prom = 0;
		$aux = "numero";
		for($i = 1; $i <= $cantidad; $i++)
		{
            $aux2 = $i;  
			settype($aux2,'string');
			$aux3 = $aux.$aux2;
			$sum = $sum + $this->post->$aux3;
		}
		$prom = $sum / $cantidad;
		
		$this->engine->assign('bandera',2);
		$this->engine->assign('cantidad',$cantidad);
		$this->engine->assign('suma',$sum);
		$this->engine->assign('promedio',$prom);
		
	}
	public function display()
	{    
		$this->engine->display('header.tpl');
		$this->engine->display('sum_prom.tpl');
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
$call = new c_sum_prom();
$call->run();
?>