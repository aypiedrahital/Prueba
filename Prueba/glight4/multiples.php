<?php

require('./configs/include.php');

class c_multiples extends super_controller {

    public function display()
    {
        $cod['boss']['id']=1;
        $options['boss']['lvl2']="one";
        
        $cod['clerk']['boss']=1;
        $options['clerk']['lvl2']="by_boss";
        
        $components['boss']['clerk']=array("b_c");
        $this->orm->connect();
        $this->orm->read_data(array("boss","clerk"),$options,$cod);
        $boss = $this->orm->get_objects("boss",$components);
        $this->engine->assign('boss',$boss[0]);
        
        $this->engine->assign('title','Datos Multiples');
        $this->engine->display('header.tpl');
        $this->engine->display('multiples.tpl');
        $this->engine->display('footer.tpl');
    }
    
    public function run()
    {
        $this->display();
    }
}

$call = new c_multiples();
$call->run();

?>