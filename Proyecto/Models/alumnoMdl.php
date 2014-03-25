<?php

	/**
	 *Modelo para  Alumno
	*/

class alumnoMdl {
	public $conexion;
	function __construct() { 
		require('Models/Alumno.php');
	}
	public function getAlumnos()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "207477198" => new Alumno("Oswaldo Martinez Fonseca", "oswaldo-1119@hotmail.com",
            										 "https://www.google.com", "oswaldo1119", "3334699943", "207477198","phenix", "1"),  
            "207466098" => new Alumno("Marco Antonio de la Cruz Gonzalez", "marcodelacruz@hotmail.com",
            										 "https://www.youtube.com", "marcodelacruz", "3334699940","207466098", "phenix", "1")
        );  
    }
    public function bajaAlumno($nombre, $codigo)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $alumnos = $this->getAlumnos();
        if(isset($alumnos[$codigo]))
        {
        	if($alumnos[$codigo]->nombre == $nombre)
        	{
        		//Delete Alumno ebn la base de datos
        		return true;
        	}
        	else
        		return false;
        }
        else
        	return false;
    }

    public function consultaAlumno($nombre, $codigo)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $alumnos = $this->getAlumnos();
        if(isset($alumnos[$codigo]))
        {
        	if($alumnos[$codigo]->nombre == $nombre)
        		return $alumnos[$codigo];
        	else
        		return false;
        }
        else
        	return false;
    }

    public function modificarAlumno($nombre, $codigo)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $alumnos = $this->getAlumnos();
        if(isset($alumnos[$codigo]))
        {
        	if($alumnos[$codigo]->nombre == $nombre)
        	{
        		//Delete Alumno ebn la base de datos
        		return true;
        	}
        	else
        		return false;
        }
        else
        	return false;
    }
    
	function alumno() {
		return true;
	}
}

?>