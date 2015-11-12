<?php

class video extends object_standard
{
	//atributos
	protected $url;
	protected $titulo;
	protected $descripcion;
	protected $fecha_subida;
	protected $canal_nombre;
    protected $canal_email;


        //componentes
	var $components = array();
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	
	//datos sobre los atributos
	public function metadata(){
		return array("url"=> array(), "titulo"=>array(), "descripcion"=>array(),"fecha_subida"=>array(),"canal_nombre"=>array("foreign_name"=>"c_v", "foreign"=>"canal", "foreign_attribute"=>"nombre"),"canal_email"=>array("foreign_name"=>"c_v", "foreign"=>"canal", "foreign_attribute"=>"email"));
	}
	
	public function primary_key(){
		return array("url");
	}
        	
	public function relational_keys($class, $rel_name){
		switch($class)
		{
                        case"canal":  //representa las relaciones con las clases
			switch($rel_name){
                                case "c_v":   //
				return array("canal");// nombre del atributo de la clase propia que representa la relacion
				break;
			}
			break;
			
			default;
			break;
		}
	}

}
?>