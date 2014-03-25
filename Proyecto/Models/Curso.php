<?php
class Curso {  
    public $nombre;  
    public $calendario;  
    public $NRC;
    public $fechainicial;
    public $fechafinal;
    public $dias; 
      
    public function __construct($nombre, $calendario, $NRC, $fechainicial, $fechafinal, $dias)    
    {    
        $this->nombre = $nombre;  
        $this->calendario = $calendario;  
        $this->NRC = $NRC;
        $this->fechainicial = $fechainicial;
        $this->fechafinal = $fechafinal;  
        $this->dias = $dias;
    }   
} 

?>