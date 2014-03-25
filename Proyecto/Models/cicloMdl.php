<?php

	/**
	 *Modelo para Ciclo
	*/

class cicloMdl {
	public $conexion;
	function __construct() { 
		require('Models/Ciclo.php');
	}

	public function getCiclo()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "2014-A" => new Ciclo("2014-A", "11/11/2013", "05/03/2014"),
            "2013-B" => new Ciclo("2013-B", "02/05/2014", "06/06/2014")
        );  
    }
    public function bajaCiclo($nombre)  
    {  
        $ciclo = $this->getCiclo();
        if(isset($ciclo[$nombre]))
        {

        	//Delete Ciclo en la base de datos
        	return true;
        }
        else
        	return false;
    }

    public function consultaCiclo($nombre)  
    {
        $ciclo = $this->getCiclo();
        if(isset($ciclo[$nombre]))
        {
        		return $ciclo[$nombre];
        }
        else
        	return false;
    }

    public function modificarCiclo($nombre)  
    {    
        $ciclo = $this->getCiclo();
        if(isset($ciclo[$nombre]))
        {

            //Modificar Ciclo en la base de datos
            return true;
        }
        else
            return false;
    }
    
}

?>