<?php

class canal extends object_standard
{
	//atributos 
	protected $nombre;
	protected $email;
	protected $descripcion;
	
	//components   ...siempre va
	var $components = array();
	
	//auxiliars for primary key and for files.... siempre va
	var $auxiliars = array();
	
	//datos sobre los atributos
	public function metadata(){
		return array("nombre"=> array(), "email"=>array(), "descripcion"=>array());	
	}
	
	public function primary_key(){
		return array("nombre","email");
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