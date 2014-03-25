<?php
class Profesor {  
    public $nombre;  
    public $correo;  
    public $celular;
    public $codigo;
    public $carrera; 
      
    public function __construct($nombre, $correo, $celular, $codigo, $carrera)    
    {    
        $this->nombre = $nombre;  
        $this->correo = $correo;  
        $this->celular = $celular;
        $this->codigo = $codigo;
        $this->carrera = $carrera;  
    }   
} 

?>