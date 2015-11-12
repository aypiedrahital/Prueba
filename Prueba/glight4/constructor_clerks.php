<?php

require('configs/include.php');

class c_constructor extends super_controller{
    
    public function display(){
        settype($data,'object');
        $data->id = "1001";
        $data->name= "Andrew";
        $data->salary= 50000;
        $clerk1=new list_clerks($data);
        
        $data->id= "1002";
        $data->name= "Juan";
        $data->salary= 30000;
        $clerk2=new list_clerks($data);
        
        $data->id= "1003";
        $data->name= "Ana";
        $data->salary= 40000;
        $clerk3=new list_clerks($data);
        
        $data->id= "1004";
        $data->name= "Miguel";
        $data->salary= 65000;
        $clerk4=new list_clerks($data);
        
        $listclerk= array($clerk1, $clerk2, $clerk3, $clerk4);
        
        $mayor_salario= list_clerks::mayor_salario($listclerk);
        $salario_promedio= list_clerks::salario_promedio($listclerk);
        
        $this->engine->assign('title', 'Class Constructor clerks');
        $this->engine->assign('listclerk', $listclerk);
        $this->engine->assign('mayor_salario', $mayor_salario);
        $this->engine->assign('salario_promedio', $salario_promedio);
        
        
        $this->engine->display('header.tpl');
        $this->engine->display('constructor_clerks.tpl');
        $this->engine->display('footer.tpl');
    }
    
    public function run(){
        $this->display();
    }
}

$call= new c_constructor();
$call->run();
        

?>

