<?php

class vivienda extends object_standard
{
	//atributos 
	protected $codigo;
	protected $estrato;
	protected $direccion;
	protected $propietario;
	
	//components   ...siempre va
	var $components = array();
	
	//auxiliars for primary key and for files.... siempre va
	var $auxiliars = array();
	
	//datos sobre los atributos
	public function metadata(){
		return array("codigo"=> array(), "estrato"=>array(), "direccion"=>array(),"propietario"=>array("foreign_name"=>"v_p", "foreign"=>"propietario", "foreign_attribute"=>"cedula"));
	}
	
	public function primary_key(){
		return array("codigo");
	}
	
	public function relational_keys($class, $rel_name){
        switch($class){
            case "propietario":
                switch ($rel_name){
                // esto es la relación entre boss_clerk, usado para
                // las consultas
                case "v_p":
                    return array("propietario");
                    break;
            }
            break;
		}
	}
	

}

?>