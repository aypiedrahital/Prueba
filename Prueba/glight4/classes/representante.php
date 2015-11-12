<?php

class representante extends object_standard
{
	//atributos 
	protected $nombre;
	protected $cedula;
	protected $contrasena;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//datos sobre los atributos
	public function metadata(){
		return array("nombre"=> array(), "cedula"=>array(), "contrasena"=>array());	
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