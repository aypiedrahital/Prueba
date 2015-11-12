<?php

class boss extends object_standard
{
	//atributos 
	protected $id;
	protected $name;
	protected $charge;
	
	//components   ...siempre va
	var $components = array();
	
	//auxiliars for primary key and for files.... siempre va
	var $auxiliars = array();
	
	//datos sobre los atributos
	public function metadata(){
		return array("id"=> array(), "name"=>array(), "charge"=>array());	
	}
	
	public function primary_key(){
		return array("id");
	}
	
	public function relational_keys($class, $rel_name){
		switch($class)
		{
			default;
			break;
		}
	}
	

}

?>