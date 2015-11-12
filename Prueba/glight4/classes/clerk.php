<?php

class clerk extends object_standard
{
	//atributos
	protected $id;
	protected $name;
	protected $salary;
	protected $boss;
       // protected $boss_id;
        //protected $boss_charge;


        //componentes
	var $components = array();
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	
	//datos sobre los atributos
	public function metadata(){
		return array("id"=> array(), "name"=>array(), "salary"=>array(),"boss"=>array("foreign_name"=>"b_c", "foreign"=>"boss", "foreign_attribute"=>"id"));
	}
	/*public function metadata(){
		return array("id"=> array(), "name"=>array(), "salary"=>array(),"boss_id"=>array("foreign_name"=>"b_c", "foreign"=>"boss", "foreign_attribute"=>"id"),"boss_charge"=>array("foreign_name"=>"b_c", "foreign"=>"boss", "foreign_attribute"=>"charge"));
	}*/
	public function primary_key(){
		return array("id");
	}
        public function aumento()
	{
		return $this->salary + $this->salary*0.1;
	}
	
	public function relational_keys($class, $rel_name){
		switch($class)
		{
                        case"boss":  //representa las relaciones con las clases
			switch($rel_name){
                                case "b_c":   //
				return array("boss");// nombre del atributo de la clase propia que representa la relacion
				break;
			}
			break;
			
			default;
			break;
		}
	}

}
?>