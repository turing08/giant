<?php

	/**
	 *Modelo para Curso
	*/

class cursoMdl {
	public $conexion;
	function __construct() { 
		require('Models/Curso.php');
	}

	public function getCurso()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "CC303" => new Curso("Programacion Web", "2014-A", "CC303", "11/11/2013", "05/03/2014", array(1,2)),
            "CC401" => new Curso("Sistemas Operativos", "2014-A", "CC401", "02/05/2014", "06/06/2014", array(1,3,5))
        );  
    }
    public function bajaCurso($nombre, $nrc)  
    {  
        $curso = $this->getCurso();
        if(isset($curso[$nrc]))
        {
        	if($curso[$nrc]->nombre == $nombre)
        	{
        		//Delete Curso ebn la base de datos
        		return true;
        	}
        	else
        		return false;
        }
        else
        	return false;
    }

    public function consultaCurso($nombre, $nrc)  
    {    
        $curso = $this->getCurso();
        if(isset($curso[$nrc]))
        {
        	if($curso[$nrc]->nombre == $nombre)
        		return $curso[$nrc];
        	else
        		return false;
        }
        else
        	return false;
    }

    public function modificarCurso($nombre, $nrc)  
    {    
        $curso = $this->getCurso();
        if(isset($curso[$nrc]))
        {
        	if($curso[$nrc]->nombre == $nombre)
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