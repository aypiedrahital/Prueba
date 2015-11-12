<?php

/**
 * Project:     Framework G - G Light
 * File:        db.php
 * 
 * For questions, help, comments, discussion, etc., please join to the
 * website www.frameworkg.com
 * 
 * @link http://www.frameworkg.com/
 * @copyright 2013-02-07
 * @author Group Framework G  <info at frameworkg dot com>
 * @version 1.2
 */

class db
{
    var $server = C_DB_SERVER; //DB server
	var $user = C_DB_USER; //DB user
    var $pass = C_DB_PASS; //DB password
	var $db = C_DB_DATABASE_NAME; //DB database name
	var $limit = C_DB_LIMIT; //DB limit of elements by page
	var $cn;
	var $numpages;
	
	public function db(){}
	
	//connect to database
	public function connect()
	{
		$this->cn = mysqli_connect($this->server, $this->user, $this->pass);
		if(!$this->cn) {die("Failed connection to the database: ".mysqli_error($this->cn));}
		if(!mysqli_select_db($this->cn,$this->db)) {die("Unable to communicate with the database $db: ".mysqli_error($this->cn));}
		mysqli_query($this->cn,"SET NAMES utf8");
	}
	
	//function for doing multiple queries
	public function do_operation($operation, $class = NULL)
	{
		$result = mysqli_query($this->cn, $operation) ;
		if(!$result) {$this->throw_sql_exception($class);}	
	}
	
	//function for obtain data from db in object form
	private function get_data($operation)
	{		
		$data = array(); 
		$result = mysqli_query($this->cn, $operation) or die(mysqli_error($this->cn));
		while ($row = mysqli_fetch_object($result))
		{
			array_push($data, $row);
		}
		return $data;
	}
	
	//throw exception to web document
	private function throw_sql_exception($class)
    {
		$errno = mysqli_errno($this->cn); $error = mysqli_error($this->cn);
		$msg = $error."<br /><br /><b>Error number:</b> ".$errno;
        throw new Exception($msg);
    }
	
	//for avoid sql injections, this functions cleans the variables
	private function escape_string(&$data)
	{
		if(is_object($data))
		{
			foreach ($data->metadata() as $key => $attribute)
			{if(!is_empty($data->get($key))){$data->set($key,mysqli_real_escape_string($this->cn,$data->get($key)));}}
		}
		else if(is_array($data))
		{
			foreach ($data as $key => $value) 
			{if(!is_array($value)){$data[$key]=mysqli_real_escape_string($this->cn,$value);}}
		}
	}
	
	//function for add data to db
	public function insert($options,$object) 
	{
		switch($options['lvl1'])
		{																																																																																													
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					//
					break;
			}
			break;
                        case "clerk":
			switch($options['lvl2'])
				{
				case "normal":
						$id=mysqli_real_escape_string($this->cn,$object->get('id'));
						$name=mysqli_real_escape_string($this->cn,$object->get('name'));
						$salary=mysqli_real_escape_string($this->cn, ($object->get('salary')));
						$boss=mysqli_real_escape_string($this->cn,$object->get('boss'));
						$this->do_operation("INSERT INTO clerk (id, name, salary, boss) VALUES ('$id', '$name', '$salary', '$boss');");
				break;
				}
			case "persona":
			switch($options['lvl2'])
				{
				case "normal":
      				$hasher = new PasswordHash(8, FALSE);
					$contrasena = $hasher->HashPassword($object->get('contrasena'));
					unset($hasher);
					$this->escape_string($object);
					$nombre = $object->get('nombre');
					$cedula= $object->get('cedula');
					$sexo= $object->get('sexo');
					$rol= $object->get('rol');
					$ocupacion= $object->get('ocupacion');
					
						$this->do_operation("INSERT INTO persona (cedula, nombre, contrasena, sexo, ocupacion, rol) VALUES ('$cedula', '$nombre', '$contrasena', '$sexo', '$ocupacion', '$rol');");
					break;
				}
				case "propietario":
                        switch ($options['lvl2']){
                            case "normal":
                                $cedula=mysqli_real_escape_string($this->cn,$object->get('cedula'));
                                $nombre=mysqli_real_escape_string($this->cn,$object->get('nombre'));
                                // Se realiza la insercción del objeto mismo
                                $this->do_operation("INSERT INTO propietario "
                                        . "(cedula, nombre) "
                                        . "VALUES ('$cedula', '$nombre');");
                                break;
                        }
                        break;
                    case "vivienda":
                        switch ($options['lvl2']){
                            case "normal":
                                $codigo=mysqli_real_escape_string($this->cn,$object->get('codigo'));
                                $estrato=mysqli_real_escape_string($this->cn,$object->get('estrato'));
                                $direccion=mysqli_real_escape_string($this->cn,$object->get('direccion'));
                                $propietario=mysqli_real_escape_string($this->cn,$object->get('propietario'));
                                // Se realiza la insercción del objeto mismo
                                $this->do_operation("INSERT INTO vivienda "
                                        . "(codigo, estrato, direccion, propietario) "
                                        . "VALUES ('$codigo', '$estrato', '$direccion', '$propietario');");
                                break;
                        }
			break;
			
			default: break;
		}
	}
	
	//function for edit data from db
	public function update($options,$object) 
	{
		switch($options['lvl1'])
		{																																																																																																		
			case "user":
			switch($options['lvl2'])
			{
				case "normal":
					//
					break;
			}
			break;
			
			default: break;
		}
	}
	
	//function for delete data from db
	public function delete($options,$object)
	{
		switch($options['lvl1'])
		{																																																																																												
			case "user":
			switch($options['lvl2'])
			{
				case "normal": 
					//
					break;
			}
			break;
			
			default: break;			  
		}
	}
	
	//function that returns an array with data from a operation
	public function select($option,$data)
	{
		$info = array();
		switch($option['lvl1'])
		{																																	
		   case "user":
			switch($option['lvl2'])
			{
				case "all": 
					//
					break;
			}
			break;
                    case "canal":
            switch($option['lvl2'])
            {
                case "all" :					
                    $info=$this->get_data("SELECT * FROM canal;"); 
				break;
                case "one":
					$id=mysqli_real_escape_string($this->cn,$data['id']);
					$info=$this->get_data("SELECT * FROM clerk WHERE id='$id';");
				break;
                case "n":	
					$boss=mysqli_real_escape_string($this->cn,$data['propietario']);
					$info=$this->get_data("SELECT nombre FROM propietario WHERE ='$boss';"); 
				break;
            }
            break;
			
			case "propietario":
                        switch ($option['lvl2']){
                            case "rico":
                                $info=$this->get_data("SELECT cedula, nombre "
                                        . "FROM vivienda, propietario "
                                        . "WHERE propietario=cedula AND estrato=5;"); break;
                        }
                                
                        break;
            			
		
            case "clerk":
            switch($option['lvl2'])
            {
                case "all" :					
                    $info=$this->get_data("SELECT * FROM clerk;"); 
				break;
                case "one":
					$id=mysqli_real_escape_string($this->cn,$data['id']);
					$info=$this->get_data("SELECT * FROM clerk WHERE id='$id';");
				break;
                case "by_boss":	
					$boss=mysqli_real_escape_string($this->cn,$data['boss']);
					$info=$this->get_data("SELECT * FROM clerk WHERE boss='$boss';"); 
				break;
            }
            break;
			case "persona":
            switch($option['lvl2'])
            {
                case "all" :					
                    $info=$this->get_data("SELECT * FROM persona;"); 
				break;
                case "by_cedula":
					$id=mysqli_real_escape_string($this->cn,$data['cedula']);
					$info=$this->get_data("SELECT * FROM persona WHERE cedula='$cedula';");
				break;
				case "by_name":
					$id=mysqli_real_escape_string($this->cn,$data['name']);
					$info=$this->get_data("SELECT * FROM persona WHERE name='$name';");
				break;
                case "by_boss":	
					$boss=mysqli_real_escape_string($this->cn,$data['boss']);
					$info=$this->get_data("SELECT * FROM clerk WHERE boss='$boss';"); 
				break;
            }
            break;
                    
            case "boss":
            switch($option['lvl2'])
            {
                case "all" :					
                    $info=$this->get_data("SELECT * FROM boss;"); 
				break;
                case "one":
					$id=mysqli_real_escape_string($this->cn,$data['id']);
					$info=$this->get_data("SELECT * FROM boss WHERE id='$id';");
				break;
			}
			break;
							case "finca":
				switch($option['lvl2'])
				{
				case "by_id" :
	
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                $info=$this->get_data("SELECT * FROM finca where granjero='$id';"); break;
				
				case "one_granjero":
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                $info=$this->get_data("SELECT f.*, g.nombre as nombre_granjero FROM finca as f, granjero as g where f.id='$id' and f.granjero=g.id");
				break;
				case "all" :
                $info=$this->get_data("SELECT * FROM finca"); break;
				case "one" :
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                $info=$this->get_data("SELECT id FROM finca where id='$id'"); 
				break;
				 case "especial_1":
				 $info=$this->get_data("SELECT * FROM finca group by granjero ORDER BY cantidad_vacas ASC ");
				 break;
				 case "especial_2":
				 $info=$this->get_data("SELECT granjero, SUM( cantidad_gallinas ) AS cantidad_gallinas FROM finca GROUP BY granjero ORDER BY cantidad_gallinas ASC ");
				 break;
				 case "especial_3":
				 $info=$this->get_data("SELECT nombre from finca where cantidad_vacas<5 and cantidad_gallinas>3");
				 break;
				 case "es" :
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                $info=$this->get_data("SELECT * FROM finca where id='$id'"); 
				break;
				}
			break;
			case "granjero":
			switch($option['lvl2'])
			{
				case "all": 
					
			 $info=$this->get_data("SELECT * FROM granjero;"); 
					break;
				case "one" :
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                 $info=$this->get_data("SELECT * FROM granjero where id='$id';"); break;
				 
				case "by_finca":
				$id=mysqli_real_escape_string($this->cn,$data['id']);
                $info=$this->get_data("SELECT g. * , f.nombre AS finca FROM granjero AS g, finca AS f WHERE g.id = f.granjero AND g.id ='$id'"); break;
				 
				

			}
			break;
			default: break;
		}
		return $info;
	}
	
	
	//close the db connection
	public function close()
	{
		if($this->cn){mysqli_close($this->cn);}
	}
	
}

?>