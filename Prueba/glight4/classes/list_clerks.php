<?php

class list_clerks extends object_standard
{
    //attribute variables
    protected $id;
    protected $name;
    protected $salary;
    protected $boss;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();
    
    //data about the attributes
    public function metadata(){
        return array(
            "id" => array(),
            "name" => array(),
            "salary" => array(),
            "boss" => array("foreign_name" => "b_c", "foreign" => "boss", "foreign_attribute" => "id")
        );
    }
    
    public function primery_key(){
        return array("id");
    }
    
       public static function mayor_salario($listclerk){
        $mayor_salario=0;
        foreach ($listclerk as $value) {
            if($value->salary >= $mayor_salario){
                $mayor_salario = $value->salary;
            }
        }
        return $mayor_salario;
    }
    
    public static function salario_promedio($listclerk){
        $salario_promedio=0;
        $contador=0;
        foreach ($listclerk as $value) {
            $salario_promedio += $value->salary;
            $contador++;
        }
        return $salario_promedio/$contador;
    }
    public function relational_keys($class, $rel_name){
        switch($class){
            case "boss":
            switch ($rel_name){
                
                case "b_c":
                    return array("boss");
                    break;
            }
            break;
        }
    }
    
    
}

?>

