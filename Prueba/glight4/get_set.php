<?php
 require('configs/include.php');
 
 class c_get_set extends super_controller
 {
     public function display()
     { 
         settype($data,'object');
         $data->id="1000";
         $data->name="Andrew";
         $data->salary=5000;
         
         $clerk= new clerk($data);
         
         $this->engine->assign('clerk',$clerk);
         $this->engine->assign('title','Class Get Set');
         $this->engine->display('header.tpl');
         $this->engine->display('get_set.tpl');
         $this->engine->display('footer.tpl');
         
        echo $clerk->get('name');
         $clerk->set('name','Daniel');
     }
     
     public function run()
     {
         $this->display();
     }
 }
     $call= new c_get_set();
     $call->run();
 



?>
