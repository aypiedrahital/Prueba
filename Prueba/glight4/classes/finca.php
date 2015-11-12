<?php

class finca extends object_standard
{
	//attribute variables
	protected $id;
	protected $nombre;
	protected $valor_propiedad;
	protected $cantidad_vacas;
	protected $cantidad_gallinas;
	protected $granjero;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array(), "nombre" => array(), "valor_propiedad" => array(), "cantidad_vacas" => array(), "cantidad_gallinas" => array(),"granjero" => array("foreign_name" => "g_f", 
					 "foreign" => "granjero", "foreign_attribute" => "id")); 
	}

	public function primary_key()
	{
		return array("id");
	}	
	public function mayor_vacas($fincas){
	$count=count($fincas);
	return $fincas[$count-1];
	}
	public function mayor_gallinas($fincas){
	$count=count($fincas);
	return $fincas[$count-1];
	}	
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{
			case "granjero":
			switch($rel_name)
			{
				case "g_f":
				echo "oeoeoeo";
				return array("granjero");
				break;
			}
			break;
			
			default:
			break;
		}
	}
}