<?php

	/**
	 *Modelo para  Profesor
	*/

class profesorMdl {
	public $conexion;
	function __construct() { 
		require('Models/Profesor.php');
	}
	public function getProfesor()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "111934523" => new Profesor("Alejandro Martinez Fonseca", "alejandro@hotmail.com", "3334699943", "103476123", "1"),  
            "103476123" => new Profesor("Nancy Michelle Torres", "nancy@hotmail.com", "3334699940","103476123", "1")
        );  
    }
    public function bajaProfesor($nombre, $codigo)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $profesor = $this->getProfesor();
        if(isset($profesor[$codigo]))
        {
        	if($profesor[$codigo]->nombre == $nombre)
        	{
        		//Delete Profesor ebn la base de datos
        		return true;
        	}
        	else
        		return false;
        }
        else
        	return false;
    }

    public function consultaProfesor($nombre, $codigo)  
    {    
        $profesor = $this->getProfesor();
        if(isset($profesor[$codigo]))
        {
        	if($profesor[$codigo]->nombre == $nombre)
        		return $profesor[$codigo];
        	else
        		return false;
        }
        else
        	return false;
    }

    public function modificarProfesor($nombre, $codigo)  
    {    
        $profesor = $this->getProfesor();
        if(isset($profesor[$codigo]))
        {
        	if($profesor[$codigo]->nombre == $nombre)
        	{
        		//Modificar Profesor ebn la base de datos
        		return true;
        	}
        	else
        		return false;
        }
        else
        	return false;
    }
    
}

?>