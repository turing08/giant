<?php
class Ciclo {  
    public $ciclo;  
    public $fechainicial;
    public $fechafinal;
      
    public function __construct($ciclo, $fechainicial, $fechafinal)    
    {    
        $this->ciclo = $ciclo;  
        $this->fechainicial = $fechainicial;
        $this->fechafinal = $fechafinal;  

    }   
} 

?>