<?php

class propietario extends object_standard
{
	//atributos 
	protected $cedula;
	protected $nombre;
		
	//components   ...siempre va
	var $components = array();
	
	//auxiliars for primary key and for files.... siempre va
	var $auxiliars = array();
	
	//datos sobre los atributos
	public function metadata(){
		return array("cedula"=> array(), "nombre"=>array());	
	}
	
	public function primary_key(){
		return array("cedula");
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